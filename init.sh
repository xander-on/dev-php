#!/bin/bash

# Copia el archivo .env.template y lo renombra como .env
cp .env.template .env

# Limpia los valores en las variables del archivo .env.template
sed -i 's/=.*$/=/' .env.template

# Elimina la carpeta .git
rm -rf .git

# Inicializa un nuevo repositorio Git
git init

#ejecuta docker
docker-compose up -d

# Elimina el archivo
rm .gitattributes

# Realiza un commit inicial
git add .
git commit -m "First comit"

# Elimina el archivo init.sh
rm -- "$0"
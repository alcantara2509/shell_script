#!/bin/bash

mkdir thiago

var1="alcantara"
var2="dos"
var3="thiago"

if ls $var1
then
    echo "diretorio $var1 encontrado"
elif ls $var2
then
    echo "diretorio $var2 encontrado"
elif ls $var3
then
    echo "diretorio $var3 encontrado"
else
    echo "não existe"
fi
#Eu sou Tryber!

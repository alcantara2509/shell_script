#!/bin/bash

read -p "numero: " num1
read -p "outro numero: " num2
echo "scale=2; $num1 / $num2" | bc


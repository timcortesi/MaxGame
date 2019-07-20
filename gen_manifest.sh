#!/bin/bash

echo "CACHE MAINFEST"
echo
find * -not -path "*/\.*" -not -path "*.manifest" -not -path "*.sh"

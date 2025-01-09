#!/bin/bash

readonly ARCHIVE='https://github.com/sunaoka/aws-sdk-php-structures-generator/archive/refs/heads/main.tar.gz'

rm -rf ../src/*

curl -sL -o - "${ARCHIVE}" | tar zxf - --strip=1 -C ../src

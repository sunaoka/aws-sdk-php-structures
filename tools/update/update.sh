#!/bin/bash

set -ue

readonly ARCHIVE='https://github.com/sunaoka/aws-sdk-php-structures-generator/archive/refs/heads/main.tar.gz'

script_dir="$(cd "$(dirname "${BASH_SOURCE:-$0}")"; pwd)"
base_dir="$(dirname "$(dirname "${script_dir}")")"

rm -rf "${base_dir}"/src/*

curl -sL -o - "${ARCHIVE}" | tar zxf - --strip=1 -C "${base_dir}"/src

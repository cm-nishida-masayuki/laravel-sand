#!/usr/bin/env bash

php artisan config:clear

set -o monitor

trap exit SIGCHLD

# Start nginx 
nginx -g 'daemon off;' &

# Start php-fpm
php-fpm -F &

wait

#!/bin/bash


wget https://raw.git...etc.../README.md -O ./temp/README.md

cp /temp/bloqv6.php /opt/mk-auth/scripts/
chmod 777 /opt/mk-auth/scripts/bloqv6.php
echo "*/1 *   * * *   root php /opt/mk-auth/scripts/bloqv6.php 2> /dev/null" > /etc/crontab

echo "INSTALAÇÃO CONCLUIDA!"

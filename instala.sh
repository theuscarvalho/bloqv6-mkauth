#!/bin/bash


wget https://raw.githubusercontent.com/theuscarvalho/bloqv6-mkauth/96413f34377e550414603bb3bc9879f667faec78/bloqv6.php -O /tmp/bloqv6.php

cp /tmp/bloqv6.php /opt/mk-auth/scripts/
chmod 777 /opt/mk-auth/scripts/bloqv6.php
echo "*/1 *   * * *   root php /opt/mk-auth/scripts/bloqv6.php 2> /dev/null" > /etc/crontab

echo "INSTALADO COM SUCESSO!"

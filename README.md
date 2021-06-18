# bloqv6-mkauth
Script para bloqueio IPv6 através do mk-auth

Para instalar basta executar o comando abaixo no terminal utilizando o putty:

wget -O - https://raw.githubusercontent.com/theuscarvalho/bloqv6-mkauth/main/instala.sh | bash

Regras necessárias no concentrador, basta executar no terminal do mikrotik:

/ppp profile set on-down="/ipv6 firewall address-list remove [find comment=\$user\];" [find use-ipv6=yes];

/ipv6 firewall filter add action=drop chain=forward src-address-list=BloqV6

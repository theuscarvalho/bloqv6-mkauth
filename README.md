# bloqv6-mkauth
Script para bloqueio IPv6 através do mk-auth

<b><h3>Para instalar basta executar o comando abaixo no terminal utilizando o putty:</h3></b>

wget -O - https://raw.githubusercontent.com/theuscarvalho/bloqv6-mkauth/main/instala.sh | bash

<b ><h3>Regras necessárias no concentrador, basta executar no terminal do mikrotik:</h3></b>

/ppp profile set on-down="/ipv6 firewall address-list remove [find comment=\\$user\];" [find use-ipv6=yes];

/ipv6 firewall filter add action=drop chain=forward src-address-list=BloqV6

<br/>
<br/>
<br/>
<i>Proibido comercializar sem autorização prévia do autor.

Contribuição para o rivotril, PIX chave aleatória: 338ab148-86eb-44c6-8c6a-201849f8ccaf</i>

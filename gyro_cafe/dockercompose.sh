docker run -d -p 3000:80 \
--net 4901-network \
--name frontendimage \ 
frontendimage \

docker run -d -p 3306:3306 \
-e MYSQL_ROOT_PASSWORD=hglmx-5*B \ 
--name mysql --net 4901-network \
mysql \

docker run -d -p 8080:80 \ 
-e MYSQL_PASSWORD=hglmx-5*B \
-e MYSQL_ROOT_PASSWORD=hglmx-5*B \
-e MYSQL_USER=root -e PMA_PORT=3306 \
--name phpmyadmin --net 4901-network \
phpmyadmin
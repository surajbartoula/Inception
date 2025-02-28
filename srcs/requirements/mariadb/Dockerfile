FROM debian:bullseye

RUN apt update && apt install -y mariadb-server mariadb-client

COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/

COPY ./tools/docker_entry.sh /usr/local/bin/

RUN chmod +x /usr/local/bin/docker_entry.sh

CMD ["/usr/local/bin/docker_entry.sh"]
FROM ubuntu:bionic
COPY xampp-linux-x64-7.1.32-0-installer.run /opt
WORKDIR /opt
RUN apt-get update
RUN apt-get install net-tools 
RUN chmod +x xampp-linux-x64-7.1.32-0-installer.run
RUN ./xampp-linux-x64-7.1.32-0-installer.run
WORKDIR lampp/htdocs
RUN mkdir FarmEasy
COPY FarmEasy /opt/lampp/htdocs/FarmEasy
WORKDIR /opt
RUN rm lampp/etc/extra/httpd-xampp.conf
COPY httpd-xampp.conf /opt/lampp/etc/extra
EXPOSE 80
COPY test.sh /usr/local/bin/
RUN chmod u+x /usr/local/bin/test.sh
ENTRYPOINT ["test.sh"]

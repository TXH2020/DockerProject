FROM ubuntu:bionic
COPY xampp-linux-x64-7.1.32-0-installer.run /opt
COPY college.csv /opt
WORKDIR /opt
RUN apt-get update
RUN apt-get install net-tools 
RUN chmod +x xampp-linux-x64-7.1.32-0-installer.run
RUN ./xampp-linux-x64-7.1.32-0-installer.run
COPY FarmEasy /opt/lampp/htdocs
RUN rm lampp/etc/extra/httpd-xampp.conf
COPY httpd-xampp.conf /opt/lampp/etc/extra
ENTRYPOINT ["/opt/lampp/lampp","start"]


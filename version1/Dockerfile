FROM amazonlinux:latest

# Install dependencies
RUN yum update -y && \
    yum install -y httpd && \
    yum search wget && \
    yum install wget -y && \
    yum install unzip -y

# change directory
RUN cd /var/www/html

# download webfiles
RUN wget https://github.com/Gedeonnday/gedeon-docker-web-app/blob/main/version1/index.html

# copy files into html directory
RUN cp index.html /var/www/html/

# remove unwanted folder
RUN rm index.html

# exposes port 80 on the container
EXPOSE 80

# set the default application that will start when the container start
ENTRYPOINT ["/usr/sbin/httpd", "-D", "FOREGROUND"]

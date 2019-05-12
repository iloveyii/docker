
# Docker

Docker is a tool to provide isolated system level environment to your applications. It is light weight virtualization 
and support techniques where you can add packages to base image in the form of containers. So your applications run
in exactly the same environment during development and production.

### Image 
A small sized operating system with lower features. You can find several ready made images on [Docker Hub](https://hub.docker.com/)

### Container
A running image is called a container. A Dockerfile which contains some basic information, is required to start a container.

### Commands - Hello world
Create a file called Dockerfile in the root directory with the following contents.
```
FROM php:7.0-apache
COPY src /var/www/html
EXPOSE 80
```
Then build the container with tag name hello-world as :
```
docker build -tag hello-world .
```
Run the container by providing a port mapping in the command as :
```
docker run -p 80:80 hello-world

```
We need to mount a volume to be able to see the our code changes reflected in the container.
```
docker run -p 80:80 -v /home/username/project/src/.:/var/www/html hello-world
```

# Docker Compose
Docker compose is used to make it easy to run multiple containers by specifying them in a file with name
docker-compose.yml. This is like a configuration file which make it easy to not write the options in the command line again and again.

To demonstrate this we create a backend application service product-service inside directory product. And a frontend application
in PHP inside directory website.

A sample docker-compose file look like:

```
version: '3'

services:
  product-service:
    build: ./product
    volumes:
      - ./product:/usr/src/app
    ports:
      - 5001:80
  website:
    build: ./website
    image: php:apache
    volumes:
      - ./website:/var/www/html
    ports:
      - 5000:80
    depends_on:
      - product-service

```

To start all containers in the compose file use the command:
```
docker-compose up

```





# Deploy Docker Containers


# Docker

Docker is a tool to provide isolated system level environment to your applications. It is light weight virtualization 
and support techniques where you can add packages to base image in the form of containers. So your applications run
in exactly the same environment during development and production.

### Image 
A small sized operating system with lower features. You can several ready images on [Docker Hub](https://hub.docker.com/)

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
```angular2
docker build -tag hello-world .
```
Run the container by providing a port mapping in the command as :
```
docker run -p 80:80 hello-world

```
To see the list of running containers:
```
docker ps
```
To see the list of available images on your system use:
```
docker images
```

We need to mount a volume to be able to see the our code changes reflected in the container.
```
docker run -p 80:80 -v /home/username/project/src/.:/var/www/html hello-world
```


### `npm start`

Runs the app in the development mode.<br>
Open [http://localhost:3000](http://localhost:3000) to view it in the browser.

The page will reload if you make edits.<br>
You will also see any lint errors in the console.

# Docker Compose



# Deploy Docker Containers

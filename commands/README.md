#Docker Commands 
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



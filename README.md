<<<<<<< HEAD
This is a simple application written in [Silex](http://silex.sensiolabs.org/), running on [Docker](http://www.docker.com/).

## How to use it?

You need to have [Docker installed](http://docs.docker.com/installation/).

### Build an image

docker build -t my-silex-app .

### Run a container

docker run -d -p 80:80 my-silex-app

### Test the app In your browser

localhost:80/info

### boot2docker

If you are using boot2docker, you need to find the IP address of the VM that contains your application.

To do this, run:

boot2docker ip

And replace "localhost" with IP address given in the reponse.
=======
# microservice-php
PHP Microservice template
>>>>>>> f3b818bacdf2c5c4c4a1734a01884851369d15c5

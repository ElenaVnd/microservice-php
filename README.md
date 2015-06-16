# microservice-php
PHP microservice template using the [Silex micro-framework](http://silex.sensiolabs.org/)

### Installation Instructions
Before you start, make sure you have [Docker installed](http://docs.docker.com/installation/)

1. Clone this repository
  ```sh
$ git clone https://github.com/CanopyCloud/microservice-php.git my-php-microservice
```

2. Build the docker container
  ```sh
$ docker build -t my-php-microservice ./my-php-microservice
```

3. Run the docker container
  ```sh
$ docker run -d -p 80:80 my-php-microservice
```

4. Launch your browser to see API information in JSON format
   ```sh
$ open http://localhost/info
```
If using boot2docker, replace localhost by your boot2docker ip. If you don't know it, run:
   ```sh
$ boot2docker ip
```

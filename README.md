# docker php-7.4 setup


Build the image 

```bash 
docker image build --tag $DOCKER_ID/php-7.4 .
```

Run th container 

```bash 
docker container run -d --publish 80:80 --mount type=bind,source="$(pwd)",target=/var/www/html terdia07/php-7.4
```# new-in-php-7.4

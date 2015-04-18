# Alexa Testing

Just testing some stuff.

## Starting the Site

To start this site, just do this stuff:

	sudo docker run --name "example.alexa.sammarks.me" -d -v /home/sammarks/sites/example.alexa.sammarks.me:/data -p 7100:80 -e VIRTUAL_HOST=example.alexa.sammarks.me maxexcloo/nginx-php

Make sure the certificate files are copied over to the correct directory in the nginx proxy.
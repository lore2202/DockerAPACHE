# DockerAPACHE
Práctica de Dockers utilizando el servidor Apache.

Para construir la imagen: docker build -t imagen_apache:1.0 .

Para ejecutarla: docker run -d -p 80:80 --name contenedor_apache imagen_apache:1.0

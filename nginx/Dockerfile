FROM nginx:latest

# Install dependencies including libpcre2-8-0
RUN apt-get update && apt-get install -y libpcre2-8-0

COPY ./nginx.conf /etc/nginx/nginx.conf
COPY ./conf.d/default.conf /etc/nginx/conf.d/default.conf

# Copy fastcgi-php.conf to snippets directory
COPY ./snippets/fastcgi-php.conf /etc/nginx/snippets/fastcgi-php.conf

EXPOSE 80

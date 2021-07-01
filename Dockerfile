FROM php:7.4.20-cli-alpine

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/
COPY --from=composer:1 /usr/bin/composer /usr/bin/
COPY --from=composer:2 /usr/bin/composer /tmp/composer-v2

RUN echo -e '#!/bin/ash\nCOMPOSER_HOME=~/.composer-v2 /tmp/composer-v2 "$@"' > /usr/bin/composer-v2 && \
    chmod +x /usr/bin/composer-v2

RUN install-php-extensions bz2 gd intl pdo_mysql zip pcntl pcov
RUN apk --no-cache add git openssh-client patch unzip

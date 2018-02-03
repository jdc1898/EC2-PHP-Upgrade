#!/bin/bash

echo "==============================="
echo "Installing PHP 7"
echo "==============================="
sudo yum install php71

echo "==============================="
echo "Installing PHP 7 additional commonly used php packages"
echo "==============================="
sudo yum -y install php71-gd
sudo yum -y install php71-imap
sudo yum -y install php71-mbstring
sudo yum -y install php71-mysqlnd
sudo yum -y install php71-opcache
sudo yum -y install php71-pecl-apcu

echo "==============================="
echo "Linking PHP 7"
echo "==============================="
sudo ln -sf /etc/httpd/conf.d/php-conf.7.1 /etc/alternatives/php.conf
sudo ln -sf /etc/httpd/conf.modules.d/15-php-conf.7.1 /etc/alternatives/10-php.conf

echo "==============================="
echo "Choose PHP 7 as an Alternative"
echo "==============================="
sudo alternatives --config php
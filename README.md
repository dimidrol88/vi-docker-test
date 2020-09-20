# Тестовое задание docker

## Установка

* Docker
```bash
docker-compose up -d --build
```
* Разворачивает дамп БД
```bash
docker exec -it vi-docker-test-mysql bash
mysql -uroot -proot app < /app/dump.sql
```
* Переходим на http://localhost:8080
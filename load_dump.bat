@echo off

rem загрузка БД filtim в MySQL

"C:/Program Files/MySQL/MySQL Server 5.5/bin/mysql" --host=127.0.0.1 --password= -u root --default-character-set=utf8 filtim < filtim.sql

echo =========================================

@pause
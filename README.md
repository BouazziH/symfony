# symfony
# pour la base de donnnee
 DATABASE_URL="mysql://root:@127.0.0.1:3306/ceppic?serverVersion=15.1&charset=utf8mb4"
 on change de la base de donner suggerer par symfony
 mais il faut cree un nv .env en le nomant .env.local
 # cree une base de doonee
 symfony console doctrine:database:create
 # cree des tables
 symfony console make:entity
 # pour faire la migration 
 symfony console make:migration
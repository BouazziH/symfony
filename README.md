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

# stylecss boostrap
Ajout de fichier boostrap css que j'ai du downloader du theme de botswatch et aussi faut cree un dossier style dans le repertoire public et je lai coller dedans
et aussi faut tapper
  <link rel="stylesheet" href="{{asset('styles/bootstrap.min.css')}}">
  dans le fichier base.html .twig

# crud
symfony console make:crud

# methode __tostring
faut ajouter pour la table formation recuper les donees
public function __toString()
    {
        return $this->getTitre();
    }
# pour ajouter emmet 
"emmet.includeLanguages": {"twig":"html"},
faut le rajouter json file qui se trouve dans file preference settings  apres faut tapper json dans la barre de recherche
# user
symfony console make:user
apres on laisse tout par defaut et aussi faire la migration et le imigrate

# authentification
 symfony console make:auth
 pour cree un formulare d'authentification 
 # creation de formulaire d'enregistration 
 symfony console make:registration-form
 # Fixtures
 $ composer require --dev orm-fixtures
 # Faker php
 composer require fakerphp/faker
 # exucute fixture
 symfony console doctrine:fixture:load
# Lancer Laragon
# Pour exposer l'api sur l'emulateur :
A faire sur le terminal laragon dans le dossier Backend-MarketPlace
```
php artisan serve --host 0.0.0.0
```
<!-- Mettre son l'adresse ip de sa machine dans le .env du projet fultter -->
<!-- Ouvrir la collection marketplace dans postman
Le mot de passe de john est "password" 
Le mot de passe de jonathan est "pomme1"
Faire les routes restantes-->
# Effectuer le seeding:
```
php artisan db:seed
php artisan migrate:fresh --seed
```
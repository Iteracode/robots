# Iteracode/Robots

## Installation

```
composer require iteracode/robots
```

## Configuration

### `bootstrap.php`

```
Plugin::load('Iteracode/Robots', ['bootstrap' => true]);
```

### `.gitignore`

```
webroot/robots.txt
```

Si vous possédiez un fichier robots.txt avant, pensez à le supprimer.

### Fichiers "templates"

Vous pouvez définir plusieurs fichiers selon vos environnements. Et les ajouter dans le dossier `config/`.

Par défaut, le plugin cherche le fichier `config/robots.prod.txt`.

Vous pouvez configurer le fichier souhaité dans la variable d'environnement `ROBOTSFILE`.

## Utilisation

Dans votre `composer.json`, lancez cette commande en `post-install-cmd`.

```
"post-install-cmd": [
    ...
    "bin/cake robots"
],
```

## Exemple

Dans l'environnement de staging, nous ne souhaitons pas que le contenu soit indexé.

`config/robots.staging.txt`

```
User-agent: *
Disallow: /
```

Sur le serveur

```
ROBOTSFILE=config/robots.staging.txt
```

# PHPBoost pour YunoHost

[![Niveau d'intégration](https://dash.yunohost.org/integration/phpboost.svg)](https://dash.yunohost.org/appci/app/phpboost) ![](https://ci-apps.yunohost.org/ci/badges/phpboost.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/phpboost.maintain.svg)  
[![Installer PHPBoost avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=phpboost)

*[Read this readme in english.](./README.md)*
*[Lire ce readme en français.](./README_fr.md)*

> *Ce package vous permet d'installer PHPBoost rapidement et simplement sur un serveur YunoHost.
Si vous n'avez pas YunoHost, regardez [ici](https://yunohost.org/#/install) pour savoir comment l'installer et en profiter.*

## Vue d'ensemble

système de gestion de contenu (CMS) français et libre

**Version incluse :** 5.2.10~ynh1

**Démo :** https://demo.phpboost.com/

## Captures d'écran

![](./doc/screenshots/01.jpg)

## Avertissements / informations importantes

## Configuration

1. Une fois l'installation terminée, l'application devra terminer le processus d'enregistrement en **visitant le domaine** sur lequel PHPBoost est installé.
1. Les informations d'identification de la base de données MySQL seront envoyées à **l'email admin**. Remplissez ces détails lors du processus d'inscription.

## Documentations et ressources

* Site officiel de l'app : https://www.phpboost.com/
* Documentation officielle utilisateur : https://yunohost.org/apps
* Documentation officielle de l'admin : https://www.phpboost.com/wiki/wiki.php
* Dépôt de code officiel de l'app : https://github.com/PHPBoost/PHPBoost
* Documentation YunoHost pour cette app : https://yunohost.org/app_phpboost
* Signaler un bug : https://github.com/YunoHost-Apps/phpboost_ynh/issues

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche testing](https://github.com/YunoHost-Apps/phpboost_ynh/tree/testing).

Pour essayer la branche testing, procédez comme suit.
```
sudo yunohost app install https://github.com/YunoHost-Apps/phpboost_ynh/tree/testing --debug
ou
sudo yunohost app upgrade phpboost -u https://github.com/YunoHost-Apps/phpboost_ynh/tree/testing --debug
```

**Plus d'infos sur le packaging d'applications :** https://yunohost.org/packaging_apps
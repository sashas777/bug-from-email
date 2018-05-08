# Magento 2.2.4 Fix for Issue #14952
## 1. How to install module

### Install via composer (recommend)

Run the following command in Magento 2 root folder:

```
composer require sashas/bug-from-email
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
```

### Install by copying files

Create folder and copy files from github to the folder:

```
app/code/Sashas/BugFromEmail/
```

Then run following commands

```
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
```

## 2. How to uninstall module

### If installed via composer

Run the following command in Magento 2 root folder:

```
composer remove sashas/bug-from-email
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
```

### If installed by copy files

Remove files from the folder: 

```
app/code/Sashas/BugFromEmail/
```

Then run following commands

```
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
```

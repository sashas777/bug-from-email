# Magento 2.2.4/2.2.5 Fix for Issue #14952
[![Latest Stable Version](https://poser.pugx.org/sashas/bug-from-email/v/stable)](https://packagist.org/packages/sashas/bug-from-email)
[![Total Downloads](https://poser.pugx.org/sashas/bug-from-email/downloads)](https://packagist.org/packages/sashas/bug-from-email)
[![Latest Unstable Version](https://poser.pugx.org/sashas/bug-from-email/v/unstable)](https://packagist.org/packages/sashas/bug-from-email)
[![License](https://poser.pugx.org/sashas/bug-from-email/license)](https://packagist.org/packages/sashas/bug-from-email)

This module works only with Magento 2.2.4/2.2.5 versions and need to be removed after upgrade/downgrade. Assumed that the issue will be fixed in the new release. 

## 1. How to install module

### Install via composer

Run the following command in Magento 2 root folder:

```
composer require sashas/bug-from-email
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

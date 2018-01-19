# Analytics Bundle for eZ Platform 2

The Analytics Bundle for eZ Platform 2 provides a basic interface for Google Analytics in the admin.

## Installation

### Use Composer

Run the following from your website root folder to install Analytics Bundle:

```
$ composer require donfelice/analyticsbundle
```

### Activate the bundle

Activate the bundle in app/AppKernel.php file by adding it to the $bundles array in registerBundles method, together with other required bundles:

```javascript
public function registerBundles()
{
    ...
    $bundles[] = new Donfelice\AnalyticsBundle\DonfeliceAnalyticsBundle();

    return $bundles;
}
```

### Assetic configuration

You need to add it to Assetic configuration in app/config/config.yml, together with EzPlatformAdminUiBundle and all other bundles already configured there:

```
assetic:
    bundles: [EzPlatformAdminUiBundle, DonfeliceAnalyticsBundle]
```


Rename and update if needed the EventListener/MyAdminUIMenuListener.php.dist file.

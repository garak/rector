<?php

declare (strict_types=1);
namespace RectorPrefix20210517;

use Rector\NetteToSymfony\Rector\Interface_\DeleteFactoryInterfaceRector;
use RectorPrefix20210517\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\RectorPrefix20210517\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/../../../../../config/config.php');
    $services = $containerConfigurator->services();
    $services->set(\Rector\NetteToSymfony\Rector\Interface_\DeleteFactoryInterfaceRector::class);
};

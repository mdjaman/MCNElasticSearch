<?php
/**
 * @author Antoine Hedgecock <antoine@pmg.se>
 *
 * @copyright PMG Media Group AB
 */

namespace MCNElasticSearch\ServiceFactory;

use Elastica\Client;
use MCNElasticSearch\Service\MappingService;
use MCNElasticSearch\Service\MetadataService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class MappingServiceFactory
 */
class MappingServiceFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new MappingService(
            $serviceLocator->get(Client::class),
            $serviceLocator->get(MetadataService::class)
        );
    }
}

<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\AssociateConfigurationItemsToApplication;

trait AssociateConfigurationItemsToApplicationTrait
{
    /**
     * @param AssociateConfigurationItemsToApplicationRequest $args
     * @return AssociateConfigurationItemsToApplicationResponse
     */
    public function associateConfigurationItemsToApplication(AssociateConfigurationItemsToApplicationRequest $args)
    {
        $result = parent::associateConfigurationItemsToApplication($args->toArray());
        return new AssociateConfigurationItemsToApplicationResponse($result->toArray());
    }
}

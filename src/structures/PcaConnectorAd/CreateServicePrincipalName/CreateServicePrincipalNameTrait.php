<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\CreateServicePrincipalName;

trait CreateServicePrincipalNameTrait
{
    /**
     * @param CreateServicePrincipalNameRequest $args
     * @return void
     */
    public function createServicePrincipalName(CreateServicePrincipalNameRequest $args)
    {
        parent::createServicePrincipalName($args->toArray());
    }
}

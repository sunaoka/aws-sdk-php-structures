<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\DeleteServicePrincipalName;

trait DeleteServicePrincipalNameTrait
{
    /**
     * @param DeleteServicePrincipalNameRequest $args
     * @return void
     */
    public function deleteServicePrincipalName(DeleteServicePrincipalNameRequest $args)
    {
        parent::deleteServicePrincipalName($args->toArray());
    }
}

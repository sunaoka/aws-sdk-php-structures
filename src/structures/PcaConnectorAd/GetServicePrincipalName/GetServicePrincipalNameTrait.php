<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetServicePrincipalName;

trait GetServicePrincipalNameTrait
{
    /**
     * @param GetServicePrincipalNameRequest $args
     * @return GetServicePrincipalNameResponse
     */
    public function getServicePrincipalName(GetServicePrincipalNameRequest $args)
    {
        $result = parent::getServicePrincipalName($args->toArray());
        return new GetServicePrincipalNameResponse($result->toArray());
    }
}

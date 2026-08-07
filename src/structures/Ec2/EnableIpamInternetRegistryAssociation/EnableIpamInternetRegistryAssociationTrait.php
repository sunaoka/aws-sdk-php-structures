<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableIpamInternetRegistryAssociation;

trait EnableIpamInternetRegistryAssociationTrait
{
    /**
     * @param EnableIpamInternetRegistryAssociationRequest $args
     * @return EnableIpamInternetRegistryAssociationResponse
     */
    public function enableIpamInternetRegistryAssociation(EnableIpamInternetRegistryAssociationRequest $args)
    {
        $result = parent::enableIpamInternetRegistryAssociation($args->toArray());
        return new EnableIpamInternetRegistryAssociationResponse($result->toArray());
    }
}

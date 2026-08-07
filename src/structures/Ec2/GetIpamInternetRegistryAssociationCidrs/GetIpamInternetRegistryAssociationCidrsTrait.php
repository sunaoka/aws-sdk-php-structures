<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamInternetRegistryAssociationCidrs;

trait GetIpamInternetRegistryAssociationCidrsTrait
{
    /**
     * @param GetIpamInternetRegistryAssociationCidrsRequest $args
     * @return GetIpamInternetRegistryAssociationCidrsResponse
     */
    public function getIpamInternetRegistryAssociationCidrs(GetIpamInternetRegistryAssociationCidrsRequest $args)
    {
        $result = parent::getIpamInternetRegistryAssociationCidrs($args->toArray());
        return new GetIpamInternetRegistryAssociationCidrsResponse($result->toArray());
    }
}

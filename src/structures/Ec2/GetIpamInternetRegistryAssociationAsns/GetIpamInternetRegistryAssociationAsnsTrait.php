<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamInternetRegistryAssociationAsns;

trait GetIpamInternetRegistryAssociationAsnsTrait
{
    /**
     * @param GetIpamInternetRegistryAssociationAsnsRequest $args
     * @return GetIpamInternetRegistryAssociationAsnsResponse
     */
    public function getIpamInternetRegistryAssociationAsns(GetIpamInternetRegistryAssociationAsnsRequest $args)
    {
        $result = parent::getIpamInternetRegistryAssociationAsns($args->toArray());
        return new GetIpamInternetRegistryAssociationAsnsResponse($result->toArray());
    }
}

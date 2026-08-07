<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamInternetRegistryAssociation;

trait CreateIpamInternetRegistryAssociationTrait
{
    /**
     * @param CreateIpamInternetRegistryAssociationRequest $args
     * @return CreateIpamInternetRegistryAssociationResponse
     */
    public function createIpamInternetRegistryAssociation(CreateIpamInternetRegistryAssociationRequest $args)
    {
        $result = parent::createIpamInternetRegistryAssociation($args->toArray());
        return new CreateIpamInternetRegistryAssociationResponse($result->toArray());
    }
}

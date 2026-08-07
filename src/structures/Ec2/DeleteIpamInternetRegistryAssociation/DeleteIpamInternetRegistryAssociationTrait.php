<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamInternetRegistryAssociation;

trait DeleteIpamInternetRegistryAssociationTrait
{
    /**
     * @param DeleteIpamInternetRegistryAssociationRequest $args
     * @return DeleteIpamInternetRegistryAssociationResponse
     */
    public function deleteIpamInternetRegistryAssociation(DeleteIpamInternetRegistryAssociationRequest $args)
    {
        $result = parent::deleteIpamInternetRegistryAssociation($args->toArray());
        return new DeleteIpamInternetRegistryAssociationResponse($result->toArray());
    }
}

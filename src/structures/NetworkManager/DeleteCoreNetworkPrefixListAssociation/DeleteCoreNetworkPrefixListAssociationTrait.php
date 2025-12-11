<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteCoreNetworkPrefixListAssociation;

trait DeleteCoreNetworkPrefixListAssociationTrait
{
    /**
     * @param DeleteCoreNetworkPrefixListAssociationRequest $args
     * @return DeleteCoreNetworkPrefixListAssociationResponse
     */
    public function deleteCoreNetworkPrefixListAssociation(DeleteCoreNetworkPrefixListAssociationRequest $args)
    {
        $result = parent::deleteCoreNetworkPrefixListAssociation($args->toArray());
        return new DeleteCoreNetworkPrefixListAssociationResponse($result->toArray());
    }
}

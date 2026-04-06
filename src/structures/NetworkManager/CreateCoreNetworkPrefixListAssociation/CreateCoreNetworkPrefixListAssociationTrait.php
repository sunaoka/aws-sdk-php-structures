<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateCoreNetworkPrefixListAssociation;

trait CreateCoreNetworkPrefixListAssociationTrait
{
    /**
     * @param CreateCoreNetworkPrefixListAssociationRequest $args
     * @return CreateCoreNetworkPrefixListAssociationResponse
     */
    public function createCoreNetworkPrefixListAssociation(CreateCoreNetworkPrefixListAssociationRequest $args)
    {
        $result = parent::createCoreNetworkPrefixListAssociation($args->toArray());
        return new CreateCoreNetworkPrefixListAssociationResponse($result->toArray());
    }
}

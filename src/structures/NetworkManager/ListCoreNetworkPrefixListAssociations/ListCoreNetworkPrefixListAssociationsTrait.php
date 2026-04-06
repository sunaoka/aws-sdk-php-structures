<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListCoreNetworkPrefixListAssociations;

trait ListCoreNetworkPrefixListAssociationsTrait
{
    /**
     * @param ListCoreNetworkPrefixListAssociationsRequest $args
     * @return ListCoreNetworkPrefixListAssociationsResponse
     */
    public function listCoreNetworkPrefixListAssociations(ListCoreNetworkPrefixListAssociationsRequest $args)
    {
        $result = parent::listCoreNetworkPrefixListAssociations($args->toArray());
        return new ListCoreNetworkPrefixListAssociationsResponse($result->toArray());
    }
}

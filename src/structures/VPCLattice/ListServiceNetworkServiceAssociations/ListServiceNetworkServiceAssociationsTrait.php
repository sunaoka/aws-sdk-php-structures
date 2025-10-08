<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkServiceAssociations;

trait ListServiceNetworkServiceAssociationsTrait
{
    /**
     * @param ListServiceNetworkServiceAssociationsRequest $args
     * @return ListServiceNetworkServiceAssociationsResponse
     */
    public function listServiceNetworkServiceAssociations(ListServiceNetworkServiceAssociationsRequest $args)
    {
        $result = parent::listServiceNetworkServiceAssociations($args->toArray());
        return new ListServiceNetworkServiceAssociationsResponse($result->toArray());
    }
}

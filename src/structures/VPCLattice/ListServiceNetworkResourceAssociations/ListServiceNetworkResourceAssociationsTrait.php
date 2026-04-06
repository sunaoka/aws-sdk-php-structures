<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkResourceAssociations;

trait ListServiceNetworkResourceAssociationsTrait
{
    /**
     * @param ListServiceNetworkResourceAssociationsRequest $args
     * @return ListServiceNetworkResourceAssociationsResponse
     */
    public function listServiceNetworkResourceAssociations(ListServiceNetworkResourceAssociationsRequest $args)
    {
        $result = parent::listServiceNetworkResourceAssociations($args->toArray());
        return new ListServiceNetworkResourceAssociationsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworks;

trait ListServiceNetworksTrait
{
    /**
     * @param ListServiceNetworksRequest $args
     * @return ListServiceNetworksResponse
     */
    public function listServiceNetworks(ListServiceNetworksRequest $args)
    {
        $result = parent::listServiceNetworks($args->toArray());
        return new ListServiceNetworksResponse($result->toArray());
    }
}

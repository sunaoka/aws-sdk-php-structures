<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListCoreNetworks;

trait ListCoreNetworksTrait
{
    /**
     * @param ListCoreNetworksRequest $args
     * @return ListCoreNetworksResponse
     */
    public function listCoreNetworks(ListCoreNetworksRequest $args)
    {
        $result = parent::listCoreNetworks($args->toArray());
        return new ListCoreNetworksResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Wickr\ListNetworks;

trait ListNetworksTrait
{
    /**
     * @param ListNetworksRequest $args
     * @return ListNetworksResponse
     */
    public function listNetworks(ListNetworksRequest $args)
    {
        $result = parent::listNetworks($args->toArray());
        return new ListNetworksResponse($result->toArray());
    }
}

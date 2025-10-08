<?php

namespace Sunaoka\Aws\Structures\Odb\ListOdbNetworks;

trait ListOdbNetworksTrait
{
    /**
     * @param ListOdbNetworksRequest $args
     * @return ListOdbNetworksResponse
     */
    public function listOdbNetworks(ListOdbNetworksRequest $args)
    {
        $result = parent::listOdbNetworks($args->toArray());
        return new ListOdbNetworksResponse($result->toArray());
    }
}

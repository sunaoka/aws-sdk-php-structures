<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetwork;

trait GetCoreNetworkTrait
{
    /**
     * @param GetCoreNetworkRequest $args
     * @return GetCoreNetworkResponse
     */
    public function getCoreNetwork(GetCoreNetworkRequest $args)
    {
        $result = parent::getCoreNetwork($args->toArray());
        return new GetCoreNetworkResponse($result->toArray());
    }
}

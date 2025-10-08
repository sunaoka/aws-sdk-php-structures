<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkRoutes;

trait GetNetworkRoutesTrait
{
    /**
     * @param GetNetworkRoutesRequest $args
     * @return GetNetworkRoutesResponse
     */
    public function getNetworkRoutes(GetNetworkRoutesRequest $args)
    {
        $result = parent::getNetworkRoutes($args->toArray());
        return new GetNetworkRoutesResponse($result->toArray());
    }
}

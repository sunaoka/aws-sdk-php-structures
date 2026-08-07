<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamDiscoveredRoutes;

trait GetIpamDiscoveredRoutesTrait
{
    /**
     * @param GetIpamDiscoveredRoutesRequest $args
     * @return GetIpamDiscoveredRoutesResponse
     */
    public function getIpamDiscoveredRoutes(GetIpamDiscoveredRoutesRequest $args)
    {
        $result = parent::getIpamDiscoveredRoutes($args->toArray());
        return new GetIpamDiscoveredRoutesResponse($result->toArray());
    }
}

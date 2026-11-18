<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListCoreNetworkEndpoints;

trait ListCoreNetworkEndpointsTrait
{
    /**
     * @param ListCoreNetworkEndpointsRequest $args
     * @return ListCoreNetworkEndpointsResponse
     */
    public function listCoreNetworkEndpoints(ListCoreNetworkEndpointsRequest $args)
    {
        $result = parent::listCoreNetworkEndpoints($args->toArray());
        return new ListCoreNetworkEndpointsResponse($result->toArray());
    }
}

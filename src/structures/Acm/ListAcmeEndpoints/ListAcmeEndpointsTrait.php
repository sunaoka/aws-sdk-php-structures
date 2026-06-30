<?php

namespace Sunaoka\Aws\Structures\Acm\ListAcmeEndpoints;

trait ListAcmeEndpointsTrait
{
    /**
     * @param ListAcmeEndpointsRequest $args
     * @return ListAcmeEndpointsResponse
     */
    public function listAcmeEndpoints(ListAcmeEndpointsRequest $args)
    {
        $result = parent::listAcmeEndpoints($args->toArray());
        return new ListAcmeEndpointsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\ListAppInstanceUserEndpoints;

trait ListAppInstanceUserEndpointsTrait
{
    /**
     * @param ListAppInstanceUserEndpointsRequest $args
     * @return ListAppInstanceUserEndpointsResponse
     */
    public function listAppInstanceUserEndpoints(ListAppInstanceUserEndpointsRequest $args)
    {
        $result = parent::listAppInstanceUserEndpoints($args->toArray());
        return new ListAppInstanceUserEndpointsResponse($result->toArray());
    }
}

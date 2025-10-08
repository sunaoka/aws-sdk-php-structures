<?php

namespace Sunaoka\Aws\Structures\Ecs\DiscoverPollEndpoint;

trait DiscoverPollEndpointTrait
{
    /**
     * @param DiscoverPollEndpointRequest $args
     * @return DiscoverPollEndpointResponse
     */
    public function discoverPollEndpoint(DiscoverPollEndpointRequest $args)
    {
        $result = parent::discoverPollEndpoint($args->toArray());
        return new DiscoverPollEndpointResponse($result->toArray());
    }
}

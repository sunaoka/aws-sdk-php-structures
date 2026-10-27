<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RegisterSourceEndpoint;

trait RegisterSourceEndpointTrait
{
    /**
     * @param RegisterSourceEndpointRequest $args
     * @return RegisterSourceEndpointResponse
     */
    public function registerSourceEndpoint(RegisterSourceEndpointRequest $args)
    {
        $result = parent::registerSourceEndpoint($args->toArray());
        return new RegisterSourceEndpointResponse($result->toArray());
    }
}

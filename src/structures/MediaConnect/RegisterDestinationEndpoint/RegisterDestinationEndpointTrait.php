<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RegisterDestinationEndpoint;

trait RegisterDestinationEndpointTrait
{
    /**
     * @param RegisterDestinationEndpointRequest $args
     * @return RegisterDestinationEndpointResponse
     */
    public function registerDestinationEndpoint(RegisterDestinationEndpointRequest $args)
    {
        $result = parent::registerDestinationEndpoint($args->toArray());
        return new RegisterDestinationEndpointResponse($result->toArray());
    }
}

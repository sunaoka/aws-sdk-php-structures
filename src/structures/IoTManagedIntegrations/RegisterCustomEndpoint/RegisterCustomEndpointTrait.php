<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\RegisterCustomEndpoint;

trait RegisterCustomEndpointTrait
{
    /**
     * @param RegisterCustomEndpointRequest $args
     * @return RegisterCustomEndpointResponse
     */
    public function registerCustomEndpoint(RegisterCustomEndpointRequest $args)
    {
        $result = parent::registerCustomEndpoint($args->toArray());
        return new RegisterCustomEndpointResponse($result->toArray());
    }
}

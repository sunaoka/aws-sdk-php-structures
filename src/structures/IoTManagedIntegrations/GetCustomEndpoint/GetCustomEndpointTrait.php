<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetCustomEndpoint;

trait GetCustomEndpointTrait
{
    /**
     * @param GetCustomEndpointRequest $args
     * @return GetCustomEndpointResponse
     */
    public function getCustomEndpoint(GetCustomEndpointRequest $args)
    {
        $result = parent::getCustomEndpoint($args->toArray());
        return new GetCustomEndpointResponse($result->toArray());
    }
}

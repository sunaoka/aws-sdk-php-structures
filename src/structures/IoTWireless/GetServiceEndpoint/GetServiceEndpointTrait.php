<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetServiceEndpoint;

trait GetServiceEndpointTrait
{
    /**
     * @param GetServiceEndpointRequest $args
     * @return GetServiceEndpointResponse
     */
    public function getServiceEndpoint(GetServiceEndpointRequest $args)
    {
        $result = parent::getServiceEndpoint($args->toArray());
        return new GetServiceEndpointResponse($result->toArray());
    }
}

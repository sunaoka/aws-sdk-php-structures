<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetDeviceAdvisorEndpoint;

trait GetDeviceAdvisorEndpointTrait
{
    /**
     * @param GetDeviceAdvisorEndpointRequest $args
     * @return GetDeviceAdvisorEndpointResponse
     */
    public function getDeviceAdvisorEndpoint(GetDeviceAdvisorEndpointRequest $args)
    {
        $result = parent::getDeviceAdvisorEndpoint($args->toArray());
        return new GetDeviceAdvisorEndpointResponse($result->toArray());
    }
}

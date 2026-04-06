<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\GetDeviceMethods;

trait GetDeviceMethodsTrait
{
    /**
     * @param GetDeviceMethodsRequest $args
     * @return GetDeviceMethodsResponse
     */
    public function getDeviceMethods(GetDeviceMethodsRequest $args)
    {
        $result = parent::getDeviceMethods($args->toArray());
        return new GetDeviceMethodsResponse($result->toArray());
    }
}

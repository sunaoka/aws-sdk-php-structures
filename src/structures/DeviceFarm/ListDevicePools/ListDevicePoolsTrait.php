<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListDevicePools;

trait ListDevicePoolsTrait
{
    /**
     * @param ListDevicePoolsRequest $args
     * @return ListDevicePoolsResponse
     */
    public function listDevicePools(ListDevicePoolsRequest $args)
    {
        $result = parent::listDevicePools($args->toArray());
        return new ListDevicePoolsResponse($result->toArray());
    }
}

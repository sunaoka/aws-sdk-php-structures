<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListDeviceInstances;

trait ListDeviceInstancesTrait
{
    /**
     * @param ListDeviceInstancesRequest $args
     * @return ListDeviceInstancesResponse
     */
    public function listDeviceInstances(ListDeviceInstancesRequest $args)
    {
        $result = parent::listDeviceInstances($args->toArray());
        return new ListDeviceInstancesResponse($result->toArray());
    }
}

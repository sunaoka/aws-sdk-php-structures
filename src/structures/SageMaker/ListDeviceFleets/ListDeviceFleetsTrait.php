<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListDeviceFleets;

trait ListDeviceFleetsTrait
{
    /**
     * @param ListDeviceFleetsRequest $args
     * @return ListDeviceFleetsResponse
     */
    public function listDeviceFleets(ListDeviceFleetsRequest $args)
    {
        $result = parent::listDeviceFleets($args->toArray());
        return new ListDeviceFleetsResponse($result->toArray());
    }
}

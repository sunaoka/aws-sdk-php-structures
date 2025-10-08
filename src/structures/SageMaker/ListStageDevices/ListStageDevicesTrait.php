<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListStageDevices;

trait ListStageDevicesTrait
{
    /**
     * @param ListStageDevicesRequest $args
     * @return ListStageDevicesResponse
     */
    public function listStageDevices(ListStageDevicesRequest $args)
    {
        $result = parent::listStageDevices($args->toArray());
        return new ListStageDevicesResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateDevices;

trait UpdateDevicesTrait
{
    /**
     * @param UpdateDevicesRequest $args
     * @return void
     */
    public function updateDevices(UpdateDevicesRequest $args)
    {
        parent::updateDevices($args->toArray());
    }
}

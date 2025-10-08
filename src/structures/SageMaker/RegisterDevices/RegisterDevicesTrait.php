<?php

namespace Sunaoka\Aws\Structures\SageMaker\RegisterDevices;

trait RegisterDevicesTrait
{
    /**
     * @param RegisterDevicesRequest $args
     * @return void
     */
    public function registerDevices(RegisterDevicesRequest $args)
    {
        parent::registerDevices($args->toArray());
    }
}

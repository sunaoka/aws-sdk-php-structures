<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeregisterDevices;

trait DeregisterDevicesTrait
{
    /**
     * @param DeregisterDevicesRequest $args
     * @return void
     */
    public function deregisterDevices(DeregisterDevicesRequest $args)
    {
        parent::deregisterDevices($args->toArray());
    }
}

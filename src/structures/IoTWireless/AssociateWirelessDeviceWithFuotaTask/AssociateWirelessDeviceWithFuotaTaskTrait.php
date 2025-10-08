<?php

namespace Sunaoka\Aws\Structures\IoTWireless\AssociateWirelessDeviceWithFuotaTask;

trait AssociateWirelessDeviceWithFuotaTaskTrait
{
    /**
     * @param AssociateWirelessDeviceWithFuotaTaskRequest $args
     * @return AssociateWirelessDeviceWithFuotaTaskResponse
     */
    public function associateWirelessDeviceWithFuotaTask(AssociateWirelessDeviceWithFuotaTaskRequest $args)
    {
        $result = parent::associateWirelessDeviceWithFuotaTask($args->toArray());
        return new AssociateWirelessDeviceWithFuotaTaskResponse($result->toArray());
    }
}

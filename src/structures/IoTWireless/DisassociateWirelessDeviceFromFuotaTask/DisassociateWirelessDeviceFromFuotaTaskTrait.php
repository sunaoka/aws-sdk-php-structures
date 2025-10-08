<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DisassociateWirelessDeviceFromFuotaTask;

trait DisassociateWirelessDeviceFromFuotaTaskTrait
{
    /**
     * @param DisassociateWirelessDeviceFromFuotaTaskRequest $args
     * @return DisassociateWirelessDeviceFromFuotaTaskResponse
     */
    public function disassociateWirelessDeviceFromFuotaTask(DisassociateWirelessDeviceFromFuotaTaskRequest $args)
    {
        $result = parent::disassociateWirelessDeviceFromFuotaTask($args->toArray());
        return new DisassociateWirelessDeviceFromFuotaTaskResponse($result->toArray());
    }
}

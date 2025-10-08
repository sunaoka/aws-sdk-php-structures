<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartWirelessDeviceImportTask;

trait StartWirelessDeviceImportTaskTrait
{
    /**
     * @param StartWirelessDeviceImportTaskRequest $args
     * @return StartWirelessDeviceImportTaskResponse
     */
    public function startWirelessDeviceImportTask(StartWirelessDeviceImportTaskRequest $args)
    {
        $result = parent::startWirelessDeviceImportTask($args->toArray());
        return new StartWirelessDeviceImportTaskResponse($result->toArray());
    }
}

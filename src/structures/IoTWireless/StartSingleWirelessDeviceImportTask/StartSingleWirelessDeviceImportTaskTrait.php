<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartSingleWirelessDeviceImportTask;

trait StartSingleWirelessDeviceImportTaskTrait
{
    /**
     * @param StartSingleWirelessDeviceImportTaskRequest $args
     * @return StartSingleWirelessDeviceImportTaskResponse
     */
    public function startSingleWirelessDeviceImportTask(StartSingleWirelessDeviceImportTaskRequest $args)
    {
        $result = parent::startSingleWirelessDeviceImportTask($args->toArray());
        return new StartSingleWirelessDeviceImportTaskResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDeviceImportTask;

trait GetWirelessDeviceImportTaskTrait
{
    /**
     * @param GetWirelessDeviceImportTaskRequest $args
     * @return GetWirelessDeviceImportTaskResponse
     */
    public function getWirelessDeviceImportTask(GetWirelessDeviceImportTaskRequest $args)
    {
        $result = parent::getWirelessDeviceImportTask($args->toArray());
        return new GetWirelessDeviceImportTaskResponse($result->toArray());
    }
}

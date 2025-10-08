<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessDeviceImportTask;

trait UpdateWirelessDeviceImportTaskTrait
{
    /**
     * @param UpdateWirelessDeviceImportTaskRequest $args
     * @return UpdateWirelessDeviceImportTaskResponse
     */
    public function updateWirelessDeviceImportTask(UpdateWirelessDeviceImportTaskRequest $args)
    {
        $result = parent::updateWirelessDeviceImportTask($args->toArray());
        return new UpdateWirelessDeviceImportTaskResponse($result->toArray());
    }
}

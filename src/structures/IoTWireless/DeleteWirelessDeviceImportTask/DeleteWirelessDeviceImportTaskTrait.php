<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteWirelessDeviceImportTask;

trait DeleteWirelessDeviceImportTaskTrait
{
    /**
     * @param DeleteWirelessDeviceImportTaskRequest $args
     * @return DeleteWirelessDeviceImportTaskResponse
     */
    public function deleteWirelessDeviceImportTask(DeleteWirelessDeviceImportTaskRequest $args)
    {
        $result = parent::deleteWirelessDeviceImportTask($args->toArray());
        return new DeleteWirelessDeviceImportTaskResponse($result->toArray());
    }
}

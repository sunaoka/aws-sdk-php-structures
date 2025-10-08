<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListDevicesForWirelessDeviceImportTask;

trait ListDevicesForWirelessDeviceImportTaskTrait
{
    /**
     * @param ListDevicesForWirelessDeviceImportTaskRequest $args
     * @return ListDevicesForWirelessDeviceImportTaskResponse
     */
    public function listDevicesForWirelessDeviceImportTask(ListDevicesForWirelessDeviceImportTaskRequest $args)
    {
        $result = parent::listDevicesForWirelessDeviceImportTask($args->toArray());
        return new ListDevicesForWirelessDeviceImportTaskResponse($result->toArray());
    }
}

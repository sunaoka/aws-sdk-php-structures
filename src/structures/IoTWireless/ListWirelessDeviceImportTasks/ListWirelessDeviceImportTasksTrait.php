<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessDeviceImportTasks;

trait ListWirelessDeviceImportTasksTrait
{
    /**
     * @param ListWirelessDeviceImportTasksRequest $args
     * @return ListWirelessDeviceImportTasksResponse
     */
    public function listWirelessDeviceImportTasks(ListWirelessDeviceImportTasksRequest $args)
    {
        $result = parent::listWirelessDeviceImportTasks($args->toArray());
        return new ListWirelessDeviceImportTasksResponse($result->toArray());
    }
}

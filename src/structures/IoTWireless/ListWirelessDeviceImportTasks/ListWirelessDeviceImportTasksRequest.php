<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessDeviceImportTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 250> $MaxResults
 * @property string $NextToken
 */
class ListWirelessDeviceImportTasksRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<0, 250>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

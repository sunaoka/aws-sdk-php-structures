<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListDevicesForWirelessDeviceImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property int $MaxResults
 * @property string $NextToken
 * @property 'INITIALIZED'|'PENDING'|'ONBOARDED'|'FAILED' $Status
 */
class ListDevicesForWirelessDeviceImportTaskRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Status?: 'INITIALIZED'|'PENDING'|'ONBOARDED'|'FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

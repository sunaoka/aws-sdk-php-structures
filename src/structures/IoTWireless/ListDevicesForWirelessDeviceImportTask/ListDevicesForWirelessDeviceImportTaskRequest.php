<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListDevicesForWirelessDeviceImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property int<0, 250>|null $MaxResults
 * @property string|null $NextToken
 * @property 'INITIALIZED'|'PENDING'|'ONBOARDED'|'FAILED'|null $Status
 */
class ListDevicesForWirelessDeviceImportTaskRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     MaxResults?: int<0, 250>|null,
     *     NextToken?: string|null,
     *     Status?: 'INITIALIZED'|'PENDING'|'ONBOARDED'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessDeviceImportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $DestinationName
 * @property SidewalkGetStartImportInfo|null $Sidewalk
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'INITIALIZING'|'INITIALIZED'|'PENDING'|'COMPLETE'|'FAILED'|'DELETING'|null $Status
 * @property string|null $StatusReason
 * @property int|null $InitializedImportedDeviceCount
 * @property int|null $PendingImportedDeviceCount
 * @property int|null $OnboardedImportedDeviceCount
 * @property int|null $FailedImportedDeviceCount
 */
class WirelessDeviceImportTask extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     DestinationName?: string|null,
     *     Sidewalk?: SidewalkGetStartImportInfo|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'INITIALIZING'|'INITIALIZED'|'PENDING'|'COMPLETE'|'FAILED'|'DELETING'|null,
     *     StatusReason?: string|null,
     *     InitializedImportedDeviceCount?: int|null,
     *     PendingImportedDeviceCount?: int|null,
     *     OnboardedImportedDeviceCount?: int|null,
     *     FailedImportedDeviceCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

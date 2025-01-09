<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessDeviceImportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $DestinationName
 * @property SidewalkGetStartImportInfo $Sidewalk
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'INITIALIZING'|'INITIALIZED'|'PENDING'|'COMPLETE'|'FAILED'|'DELETING' $Status
 * @property string $StatusReason
 * @property int $InitializedImportedDeviceCount
 * @property int $PendingImportedDeviceCount
 * @property int $OnboardedImportedDeviceCount
 * @property int $FailedImportedDeviceCount
 */
class WirelessDeviceImportTask extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     DestinationName?: string,
     *     Sidewalk?: SidewalkGetStartImportInfo,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Status?: 'INITIALIZING'|'INITIALIZED'|'PENDING'|'COMPLETE'|'FAILED'|'DELETING',
     *     StatusReason?: string,
     *     InitializedImportedDeviceCount?: int,
     *     PendingImportedDeviceCount?: int,
     *     OnboardedImportedDeviceCount?: int,
     *     FailedImportedDeviceCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

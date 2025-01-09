<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDeviceImportTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $DestinationName
 * @property Shapes\SidewalkGetStartImportInfo $Sidewalk
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'INITIALIZING'|'INITIALIZED'|'PENDING'|'COMPLETE'|'FAILED'|'DELETING' $Status
 * @property string $StatusReason
 * @property int $InitializedImportedDeviceCount
 * @property int $PendingImportedDeviceCount
 * @property int $OnboardedImportedDeviceCount
 * @property int $FailedImportedDeviceCount
 */
class GetWirelessDeviceImportTaskResponse extends Response
{
}

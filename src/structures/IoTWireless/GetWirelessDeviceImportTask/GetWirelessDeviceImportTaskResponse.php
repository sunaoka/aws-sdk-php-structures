<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDeviceImportTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $DestinationName
 * @property Shapes\SidewalkGetStartImportInfo|null $Sidewalk
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'INITIALIZING'|'INITIALIZED'|'PENDING'|'COMPLETE'|'FAILED'|'DELETING'|null $Status
 * @property string|null $StatusReason
 * @property int|null $InitializedImportedDeviceCount
 * @property int|null $PendingImportedDeviceCount
 * @property int|null $OnboardedImportedDeviceCount
 * @property int|null $FailedImportedDeviceCount
 */
class GetWirelessDeviceImportTaskResponse extends Response
{
}

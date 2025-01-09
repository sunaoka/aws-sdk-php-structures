<?php

namespace Sunaoka\Aws\Structures\Ec2\RestoreSnapshotFromRecycleBin;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SnapshotId
 * @property string $OutpostArn
 * @property string $Description
 * @property bool $Encrypted
 * @property string $OwnerId
 * @property string $Progress
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property 'pending'|'completed'|'error'|'recoverable'|'recovering' $State
 * @property string $VolumeId
 * @property int $VolumeSize
 * @property 'sse-ebs'|'sse-kms'|'none' $SseType
 */
class RestoreSnapshotFromRecycleBinResponse extends Response
{
}

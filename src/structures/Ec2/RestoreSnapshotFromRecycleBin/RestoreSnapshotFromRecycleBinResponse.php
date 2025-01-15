<?php

namespace Sunaoka\Aws\Structures\Ec2\RestoreSnapshotFromRecycleBin;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SnapshotId
 * @property string|null $OutpostArn
 * @property string|null $Description
 * @property bool|null $Encrypted
 * @property string|null $OwnerId
 * @property string|null $Progress
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property 'pending'|'completed'|'error'|'recoverable'|'recovering'|null $State
 * @property string|null $VolumeId
 * @property int|null $VolumeSize
 * @property 'sse-ebs'|'sse-kms'|'none'|null $SseType
 */
class RestoreSnapshotFromRecycleBinResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\EBS\StartSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Description
 * @property string $SnapshotId
 * @property string $OwnerId
 * @property 'completed'|'pending'|'error' $Status
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property int $VolumeSize
 * @property int $BlockSize
 * @property list<Shapes\Tag> $Tags
 * @property string $ParentSnapshotId
 * @property string $KmsKeyArn
 * @property 'sse-ebs'|'sse-kms'|'none' $SseType
 */
class StartSnapshotResponse extends Response
{
}

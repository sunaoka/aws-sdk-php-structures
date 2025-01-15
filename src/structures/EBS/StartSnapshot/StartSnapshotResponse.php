<?php

namespace Sunaoka\Aws\Structures\EBS\StartSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Description
 * @property string|null $SnapshotId
 * @property string|null $OwnerId
 * @property 'completed'|'pending'|'error'|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property int<1, max>|null $VolumeSize
 * @property int|null $BlockSize
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ParentSnapshotId
 * @property string|null $KmsKeyArn
 * @property 'sse-ebs'|'sse-kms'|'none'|null $SseType
 */
class StartSnapshotResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property list<Tag>|null $Tags
 * @property bool|null $Encrypted
 * @property string|null $VolumeId
 * @property 'pending'|'completed'|'error'|'recoverable'|'recovering'|null $State
 * @property int|null $VolumeSize
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property string|null $Progress
 * @property string|null $OwnerId
 * @property string|null $SnapshotId
 * @property string|null $OutpostArn
 * @property 'sse-ebs'|'sse-kms'|'none'|null $SseType
 * @property string|null $AvailabilityZone
 */
class SnapshotInfo extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Tags?: list<Tag>|null,
     *     Encrypted?: bool|null,
     *     VolumeId?: string|null,
     *     State?: 'pending'|'completed'|'error'|'recoverable'|'recovering'|null,
     *     VolumeSize?: int|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     Progress?: string|null,
     *     OwnerId?: string|null,
     *     SnapshotId?: string|null,
     *     OutpostArn?: string|null,
     *     SseType?: 'sse-ebs'|'sse-kms'|'none'|null,
     *     AvailabilityZone?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property list<Tag> $Tags
 * @property bool $Encrypted
 * @property string $VolumeId
 * @property 'pending'|'completed'|'error'|'recoverable'|'recovering' $State
 * @property int $VolumeSize
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property string $Progress
 * @property string $OwnerId
 * @property string $SnapshotId
 * @property string $OutpostArn
 * @property 'sse-ebs'|'sse-kms'|'none' $SseType
 * @property string $AvailabilityZone
 */
class SnapshotInfo extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     Tags?: list<Tag>,
     *     Encrypted?: bool,
     *     VolumeId?: string,
     *     State?: 'pending'|'completed'|'error'|'recoverable'|'recovering',
     *     VolumeSize?: int,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     Progress?: string,
     *     OwnerId?: string,
     *     SnapshotId?: string,
     *     OutpostArn?: string,
     *     SseType?: 'sse-ebs'|'sse-kms'|'none',
     *     AvailabilityZone?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

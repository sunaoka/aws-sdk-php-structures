<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateReplaceRootVolumeTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplaceRootVolumeTaskId
 * @property string $InstanceId
 * @property 'pending'|'in-progress'|'failing'|'succeeded'|'failed'|'failed-detached' $TaskState
 * @property string $StartTime
 * @property string $CompleteTime
 * @property list<Tag> $Tags
 * @property string $ImageId
 * @property string $SnapshotId
 * @property bool $DeleteReplacedRootVolume
 */
class ReplaceRootVolumeTask extends Shape
{
    /**
     * @param array{
     *     ReplaceRootVolumeTaskId?: string,
     *     InstanceId?: string,
     *     TaskState?: 'pending'|'in-progress'|'failing'|'succeeded'|'failed'|'failed-detached',
     *     StartTime?: string,
     *     CompleteTime?: string,
     *     Tags?: list<Tag>,
     *     ImageId?: string,
     *     SnapshotId?: string,
     *     DeleteReplacedRootVolume?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateReplaceRootVolumeTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplaceRootVolumeTaskId
 * @property string|null $InstanceId
 * @property 'pending'|'in-progress'|'failing'|'succeeded'|'failed'|'failed-detached'|null $TaskState
 * @property string|null $StartTime
 * @property string|null $CompleteTime
 * @property list<Tag>|null $Tags
 * @property string|null $ImageId
 * @property string|null $SnapshotId
 * @property bool|null $DeleteReplacedRootVolume
 */
class ReplaceRootVolumeTask extends Shape
{
    /**
     * @param array{
     *     ReplaceRootVolumeTaskId?: string|null,
     *     InstanceId?: string|null,
     *     TaskState?: 'pending'|'in-progress'|'failing'|'succeeded'|'failed'|'failed-detached'|null,
     *     StartTime?: string|null,
     *     CompleteTime?: string|null,
     *     Tags?: list<Tag>|null,
     *     ImageId?: string|null,
     *     SnapshotId?: string|null,
     *     DeleteReplacedRootVolume?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

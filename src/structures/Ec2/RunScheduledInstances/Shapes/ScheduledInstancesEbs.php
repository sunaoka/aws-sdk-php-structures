<?php

namespace Sunaoka\Aws\Structures\Ec2\RunScheduledInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $DeleteOnTermination
 * @property bool $Encrypted
 * @property int $Iops
 * @property string $SnapshotId
 * @property int $VolumeSize
 * @property string $VolumeType
 */
class ScheduledInstancesEbs extends Shape
{
    /**
     * @param array{
     *     DeleteOnTermination?: bool,
     *     Encrypted?: bool,
     *     Iops?: int,
     *     SnapshotId?: string,
     *     VolumeSize?: int,
     *     VolumeType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

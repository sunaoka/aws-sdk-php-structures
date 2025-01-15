<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SnapshotId
 * @property int|null $Iops
 * @property int|null $VolumeSize
 * @property 'gp2'|'io1'|'standard'|null $VolumeType
 * @property bool|null $DeleteOnTermination
 */
class EbsBlockDevice extends Shape
{
    /**
     * @param array{
     *     SnapshotId?: string|null,
     *     Iops?: int|null,
     *     VolumeSize?: int|null,
     *     VolumeType?: 'gp2'|'io1'|'standard'|null,
     *     DeleteOnTermination?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

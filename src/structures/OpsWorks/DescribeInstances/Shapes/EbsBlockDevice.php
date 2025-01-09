<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnapshotId
 * @property int $Iops
 * @property int $VolumeSize
 * @property 'gp2'|'io1'|'standard' $VolumeType
 * @property bool $DeleteOnTermination
 */
class EbsBlockDevice extends Shape
{
    /**
     * @param array{
     *     SnapshotId?: string,
     *     Iops?: int,
     *     VolumeSize?: int,
     *     VolumeType?: 'gp2'|'io1'|'standard',
     *     DeleteOnTermination?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

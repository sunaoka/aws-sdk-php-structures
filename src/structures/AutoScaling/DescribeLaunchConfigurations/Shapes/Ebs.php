<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLaunchConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnapshotId
 * @property int $VolumeSize
 * @property string $VolumeType
 * @property bool $DeleteOnTermination
 * @property int $Iops
 * @property bool $Encrypted
 * @property int $Throughput
 */
class Ebs extends Shape
{
    /**
     * @param array{
     *     SnapshotId?: string,
     *     VolumeSize?: int,
     *     VolumeType?: string,
     *     DeleteOnTermination?: bool,
     *     Iops?: int,
     *     Encrypted?: bool,
     *     Throughput?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

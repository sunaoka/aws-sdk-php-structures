<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLaunchConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnapshotId
 * @property int<1, 16384> $VolumeSize
 * @property string $VolumeType
 * @property bool $DeleteOnTermination
 * @property int<100, 20000> $Iops
 * @property bool $Encrypted
 * @property int<125, 1000> $Throughput
 */
class Ebs extends Shape
{
    /**
     * @param array{
     *     SnapshotId?: string,
     *     VolumeSize?: int<1, 16384>,
     *     VolumeType?: string,
     *     DeleteOnTermination?: bool,
     *     Iops?: int<100, 20000>,
     *     Encrypted?: bool,
     *     Throughput?: int<125, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

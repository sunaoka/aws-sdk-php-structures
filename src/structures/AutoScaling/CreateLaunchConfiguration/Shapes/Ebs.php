<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateLaunchConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SnapshotId
 * @property int<1, 16384>|null $VolumeSize
 * @property string|null $VolumeType
 * @property bool|null $DeleteOnTermination
 * @property int<100, 20000>|null $Iops
 * @property bool|null $Encrypted
 * @property int<125, 1000>|null $Throughput
 */
class Ebs extends Shape
{
    /**
     * @param array{
     *     SnapshotId?: string|null,
     *     VolumeSize?: int<1, 16384>|null,
     *     VolumeType?: string|null,
     *     DeleteOnTermination?: bool|null,
     *     Iops?: int<100, 20000>|null,
     *     Encrypted?: bool|null,
     *     Throughput?: int<125, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

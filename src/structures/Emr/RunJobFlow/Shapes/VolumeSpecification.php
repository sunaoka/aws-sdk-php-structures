<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VolumeType
 * @property int $Iops
 * @property int $SizeInGB
 * @property int $Throughput
 */
class VolumeSpecification extends Shape
{
    /**
     * @param array{
     *     VolumeType: string,
     *     Iops?: int,
     *     SizeInGB: int,
     *     Throughput?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

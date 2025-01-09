<?php

namespace Sunaoka\Aws\Structures\Emr\AddInstanceFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VolumeType
 * @property int $Iops
 * @property int $SizeInGB
 * @property int<0, max> $Throughput
 */
class VolumeSpecification extends Shape
{
    /**
     * @param array{
     *     VolumeType: string,
     *     Iops?: int,
     *     SizeInGB: int,
     *     Throughput?: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

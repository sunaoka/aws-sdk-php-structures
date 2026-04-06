<?php

namespace Sunaoka\Aws\Structures\Emr\ModifyInstanceFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VolumeType
 * @property int|null $Iops
 * @property int $SizeInGB
 * @property int<0, max>|null $Throughput
 */
class VolumeSpecification extends Shape
{
    /**
     * @param array{
     *     VolumeType: string,
     *     Iops?: int|null,
     *     SizeInGB: int,
     *     Throughput?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

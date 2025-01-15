<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VolumeSpecification|null $VolumeSpecification
 * @property string|null $Device
 */
class EbsBlockDevice extends Shape
{
    /**
     * @param array{
     *     VolumeSpecification?: VolumeSpecification|null,
     *     Device?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

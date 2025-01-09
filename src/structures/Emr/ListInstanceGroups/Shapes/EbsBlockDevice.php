<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VolumeSpecification $VolumeSpecification
 * @property string $Device
 */
class EbsBlockDevice extends Shape
{
    /**
     * @param array{
     *     VolumeSpecification?: VolumeSpecification,
     *     Device?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

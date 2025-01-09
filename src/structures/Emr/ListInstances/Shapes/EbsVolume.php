<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Device
 * @property string $VolumeId
 */
class EbsVolume extends Shape
{
    /**
     * @param array{
     *     Device?: string,
     *     VolumeId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

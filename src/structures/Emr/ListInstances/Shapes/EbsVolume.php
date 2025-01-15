<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Device
 * @property string|null $VolumeId
 */
class EbsVolume extends Shape
{
    /**
     * @param array{
     *     Device?: string|null,
     *     VolumeId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

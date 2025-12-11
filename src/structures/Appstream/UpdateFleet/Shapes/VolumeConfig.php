<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $VolumeSizeInGb
 */
class VolumeConfig extends Shape
{
    /**
     * @param array{VolumeSizeInGb?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

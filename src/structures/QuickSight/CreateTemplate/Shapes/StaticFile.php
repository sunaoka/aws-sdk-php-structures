<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageStaticFile|null $ImageStaticFile
 * @property SpatialStaticFile|null $SpatialStaticFile
 */
class StaticFile extends Shape
{
    /**
     * @param array{
     *     ImageStaticFile?: ImageStaticFile|null,
     *     SpatialStaticFile?: SpatialStaticFile|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

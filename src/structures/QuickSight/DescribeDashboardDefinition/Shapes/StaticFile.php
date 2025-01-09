<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageStaticFile $ImageStaticFile
 * @property SpatialStaticFile $SpatialStaticFile
 */
class StaticFile extends Shape
{
    /**
     * @param array{
     *     ImageStaticFile?: ImageStaticFile,
     *     SpatialStaticFile?: SpatialStaticFile
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

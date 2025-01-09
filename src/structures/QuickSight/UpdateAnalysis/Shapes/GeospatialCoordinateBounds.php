<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $North
 * @property double $South
 * @property double $West
 * @property double $East
 */
class GeospatialCoordinateBounds extends Shape
{
    /**
     * @param array{
     *     North: double,
     *     South: double,
     *     West: double,
     *     East: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

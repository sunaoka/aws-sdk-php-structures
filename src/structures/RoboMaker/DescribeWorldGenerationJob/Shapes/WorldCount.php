<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeWorldGenerationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $floorplanCount
 * @property int $interiorCountPerFloorplan
 */
class WorldCount extends Shape
{
    /**
     * @param array{
     *     floorplanCount?: int,
     *     interiorCountPerFloorplan?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

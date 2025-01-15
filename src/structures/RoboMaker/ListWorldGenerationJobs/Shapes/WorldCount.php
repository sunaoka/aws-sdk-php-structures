<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListWorldGenerationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $floorplanCount
 * @property int|null $interiorCountPerFloorplan
 */
class WorldCount extends Shape
{
    /**
     * @param array{
     *     floorplanCount?: int|null,
     *     interiorCountPerFloorplan?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

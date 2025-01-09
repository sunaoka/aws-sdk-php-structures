<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $simulationUnitLimit
 * @property 'CPU'|'GPU_AND_CPU' $computeType
 * @property int $gpuUnitLimit
 */
class Compute extends Shape
{
    /**
     * @param array{
     *     simulationUnitLimit?: int,
     *     computeType?: 'CPU'|'GPU_AND_CPU',
     *     gpuUnitLimit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

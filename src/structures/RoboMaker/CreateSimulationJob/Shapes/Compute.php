<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 15>|null $simulationUnitLimit
 * @property 'CPU'|'GPU_AND_CPU'|null $computeType
 * @property int<0, 1>|null $gpuUnitLimit
 */
class Compute extends Shape
{
    /**
     * @param array{
     *     simulationUnitLimit?: int<1, 15>|null,
     *     computeType?: 'CPU'|'GPU_AND_CPU'|null,
     *     gpuUnitLimit?: int<0, 1>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

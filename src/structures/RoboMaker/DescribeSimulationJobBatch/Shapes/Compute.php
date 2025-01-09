<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationJobBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 15> $simulationUnitLimit
 * @property 'CPU'|'GPU_AND_CPU' $computeType
 * @property int<0, 1> $gpuUnitLimit
 */
class Compute extends Shape
{
    /**
     * @param array{
     *     simulationUnitLimit?: int<1, 15>,
     *     computeType?: 'CPU'|'GPU_AND_CPU',
     *     gpuUnitLimit?: int<0, 1>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

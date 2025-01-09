<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Gazebo'|'RosbagPlay'|'SimulationRuntime' $name
 * @property string $version
 */
class SimulationSoftwareSuite extends Shape
{
    /**
     * @param array{
     *     name?: 'Gazebo'|'RosbagPlay'|'SimulationRuntime',
     *     version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

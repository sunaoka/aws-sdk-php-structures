<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Gazebo'|'RosbagPlay'|'SimulationRuntime'|null $name
 * @property string|null $version
 */
class SimulationSoftwareSuite extends Shape
{
    /**
     * @param array{
     *     name?: 'Gazebo'|'RosbagPlay'|'SimulationRuntime'|null,
     *     version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\RoboMaker\UpdateSimulationApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ROS'|'ROS2'|'General'|null $name
 * @property 'Kinetic'|'Melodic'|'Dashing'|'Foxy'|null $version
 */
class RobotSoftwareSuite extends Shape
{
    /**
     * @param array{
     *     name?: 'ROS'|'ROS2'|'General'|null,
     *     version?: 'Kinetic'|'Melodic'|'Dashing'|'Foxy'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

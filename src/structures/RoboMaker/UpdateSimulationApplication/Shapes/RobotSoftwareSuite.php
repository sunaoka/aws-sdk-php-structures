<?php

namespace Sunaoka\Aws\Structures\RoboMaker\UpdateSimulationApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ROS'|'ROS2'|'General' $name
 * @property 'Kinetic'|'Melodic'|'Dashing'|'Foxy' $version
 */
class RobotSoftwareSuite extends Shape
{
    /**
     * @param array{
     *     name?: 'ROS'|'ROS2'|'General',
     *     version?: 'Kinetic'|'Melodic'|'Dashing'|'Foxy'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

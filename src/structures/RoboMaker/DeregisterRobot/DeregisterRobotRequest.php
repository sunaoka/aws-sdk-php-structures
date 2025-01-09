<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DeregisterRobot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fleet
 * @property string $robot
 */
class DeregisterRobotRequest extends Request
{
    /**
     * @param array{
     *     fleet: string,
     *     robot: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DeleteRobot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $robot
 */
class DeleteRobotRequest extends Request
{
    /**
     * @param array{robot: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

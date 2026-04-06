<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeRobot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $robot
 */
class DescribeRobotRequest extends Request
{
    /**
     * @param array{robot: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

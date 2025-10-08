<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeRobot;

trait DescribeRobotTrait
{
    /**
     * @param DescribeRobotRequest $args
     * @return DescribeRobotResponse
     */
    public function describeRobot(DescribeRobotRequest $args)
    {
        $result = parent::describeRobot($args->toArray());
        return new DescribeRobotResponse($result->toArray());
    }
}

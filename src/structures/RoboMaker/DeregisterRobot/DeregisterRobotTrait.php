<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DeregisterRobot;

trait DeregisterRobotTrait
{
    /**
     * @param DeregisterRobotRequest $args
     * @return DeregisterRobotResponse
     */
    public function deregisterRobot(DeregisterRobotRequest $args)
    {
        $result = parent::deregisterRobot($args->toArray());
        return new DeregisterRobotResponse($result->toArray());
    }
}

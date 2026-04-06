<?php

namespace Sunaoka\Aws\Structures\RoboMaker\RegisterRobot;

trait RegisterRobotTrait
{
    /**
     * @param RegisterRobotRequest $args
     * @return RegisterRobotResponse
     */
    public function registerRobot(RegisterRobotRequest $args)
    {
        $result = parent::registerRobot($args->toArray());
        return new RegisterRobotResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateRobot;

trait CreateRobotTrait
{
    /**
     * @param CreateRobotRequest $args
     * @return CreateRobotResponse
     */
    public function createRobot(CreateRobotRequest $args)
    {
        $result = parent::createRobot($args->toArray());
        return new CreateRobotResponse($result->toArray());
    }
}

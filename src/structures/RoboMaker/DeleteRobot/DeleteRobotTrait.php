<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DeleteRobot;

trait DeleteRobotTrait
{
    /**
     * @param DeleteRobotRequest $args
     * @return DeleteRobotResponse
     */
    public function deleteRobot(DeleteRobotRequest $args)
    {
        $result = parent::deleteRobot($args->toArray());
        return new DeleteRobotResponse($result->toArray());
    }
}

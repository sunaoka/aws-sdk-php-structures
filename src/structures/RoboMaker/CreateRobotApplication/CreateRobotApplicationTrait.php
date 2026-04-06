<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateRobotApplication;

trait CreateRobotApplicationTrait
{
    /**
     * @param CreateRobotApplicationRequest $args
     * @return CreateRobotApplicationResponse
     */
    public function createRobotApplication(CreateRobotApplicationRequest $args)
    {
        $result = parent::createRobotApplication($args->toArray());
        return new CreateRobotApplicationResponse($result->toArray());
    }
}

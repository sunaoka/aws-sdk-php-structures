<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateRobotApplicationVersion;

trait CreateRobotApplicationVersionTrait
{
    /**
     * @param CreateRobotApplicationVersionRequest $args
     * @return CreateRobotApplicationVersionResponse
     */
    public function createRobotApplicationVersion(CreateRobotApplicationVersionRequest $args)
    {
        $result = parent::createRobotApplicationVersion($args->toArray());
        return new CreateRobotApplicationVersionResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\RoboMaker\UpdateRobotApplication;

trait UpdateRobotApplicationTrait
{
    /**
     * @param UpdateRobotApplicationRequest $args
     * @return UpdateRobotApplicationResponse
     */
    public function updateRobotApplication(UpdateRobotApplicationRequest $args)
    {
        $result = parent::updateRobotApplication($args->toArray());
        return new UpdateRobotApplicationResponse($result->toArray());
    }
}

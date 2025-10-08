<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DeleteRobotApplication;

trait DeleteRobotApplicationTrait
{
    /**
     * @param DeleteRobotApplicationRequest $args
     * @return DeleteRobotApplicationResponse
     */
    public function deleteRobotApplication(DeleteRobotApplicationRequest $args)
    {
        $result = parent::deleteRobotApplication($args->toArray());
        return new DeleteRobotApplicationResponse($result->toArray());
    }
}

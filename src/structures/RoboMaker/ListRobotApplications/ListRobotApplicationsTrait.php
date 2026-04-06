<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListRobotApplications;

trait ListRobotApplicationsTrait
{
    /**
     * @param ListRobotApplicationsRequest $args
     * @return ListRobotApplicationsResponse
     */
    public function listRobotApplications(ListRobotApplicationsRequest $args)
    {
        $result = parent::listRobotApplications($args->toArray());
        return new ListRobotApplicationsResponse($result->toArray());
    }
}

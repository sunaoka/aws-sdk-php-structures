<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListRobots;

trait ListRobotsTrait
{
    /**
     * @param ListRobotsRequest $args
     * @return ListRobotsResponse
     */
    public function listRobots(ListRobotsRequest $args)
    {
        $result = parent::listRobots($args->toArray());
        return new ListRobotsResponse($result->toArray());
    }
}

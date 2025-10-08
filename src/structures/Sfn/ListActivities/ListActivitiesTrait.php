<?php

namespace Sunaoka\Aws\Structures\Sfn\ListActivities;

trait ListActivitiesTrait
{
    /**
     * @param ListActivitiesRequest $args
     * @return ListActivitiesResponse
     */
    public function listActivities(ListActivitiesRequest $args)
    {
        $result = parent::listActivities($args->toArray());
        return new ListActivitiesResponse($result->toArray());
    }
}

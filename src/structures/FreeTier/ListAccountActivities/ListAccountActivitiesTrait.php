<?php

namespace Sunaoka\Aws\Structures\FreeTier\ListAccountActivities;

trait ListAccountActivitiesTrait
{
    /**
     * @param ListAccountActivitiesRequest $args
     * @return ListAccountActivitiesResponse
     */
    public function listAccountActivities(ListAccountActivitiesRequest $args)
    {
        $result = parent::listAccountActivities($args->toArray());
        return new ListAccountActivitiesResponse($result->toArray());
    }
}

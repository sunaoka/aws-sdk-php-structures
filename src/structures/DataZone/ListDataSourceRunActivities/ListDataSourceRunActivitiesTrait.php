<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSourceRunActivities;

trait ListDataSourceRunActivitiesTrait
{
    /**
     * @param ListDataSourceRunActivitiesRequest $args
     * @return ListDataSourceRunActivitiesResponse
     */
    public function listDataSourceRunActivities(ListDataSourceRunActivitiesRequest $args)
    {
        $result = parent::listDataSourceRunActivities($args->toArray());
        return new ListDataSourceRunActivitiesResponse($result->toArray());
    }
}

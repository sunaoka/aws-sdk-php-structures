<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseLogEvents;

trait GetRelationalDatabaseLogEventsTrait
{
    /**
     * @param GetRelationalDatabaseLogEventsRequest $args
     * @return GetRelationalDatabaseLogEventsResponse
     */
    public function getRelationalDatabaseLogEvents(GetRelationalDatabaseLogEventsRequest $args)
    {
        $result = parent::getRelationalDatabaseLogEvents($args->toArray());
        return new GetRelationalDatabaseLogEventsResponse($result->toArray());
    }
}

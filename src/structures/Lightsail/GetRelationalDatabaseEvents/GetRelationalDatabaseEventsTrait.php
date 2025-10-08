<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseEvents;

trait GetRelationalDatabaseEventsTrait
{
    /**
     * @param GetRelationalDatabaseEventsRequest $args
     * @return GetRelationalDatabaseEventsResponse
     */
    public function getRelationalDatabaseEvents(GetRelationalDatabaseEventsRequest $args)
    {
        $result = parent::getRelationalDatabaseEvents($args->toArray());
        return new GetRelationalDatabaseEventsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseLogStreams;

trait GetRelationalDatabaseLogStreamsTrait
{
    /**
     * @param GetRelationalDatabaseLogStreamsRequest $args
     * @return GetRelationalDatabaseLogStreamsResponse
     */
    public function getRelationalDatabaseLogStreams(GetRelationalDatabaseLogStreamsRequest $args)
    {
        $result = parent::getRelationalDatabaseLogStreams($args->toArray());
        return new GetRelationalDatabaseLogStreamsResponse($result->toArray());
    }
}

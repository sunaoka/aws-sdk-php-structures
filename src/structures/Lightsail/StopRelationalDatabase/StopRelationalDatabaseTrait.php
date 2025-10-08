<?php

namespace Sunaoka\Aws\Structures\Lightsail\StopRelationalDatabase;

trait StopRelationalDatabaseTrait
{
    /**
     * @param StopRelationalDatabaseRequest $args
     * @return StopRelationalDatabaseResponse
     */
    public function stopRelationalDatabase(StopRelationalDatabaseRequest $args)
    {
        $result = parent::stopRelationalDatabase($args->toArray());
        return new StopRelationalDatabaseResponse($result->toArray());
    }
}

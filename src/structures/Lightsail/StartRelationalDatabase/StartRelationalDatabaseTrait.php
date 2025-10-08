<?php

namespace Sunaoka\Aws\Structures\Lightsail\StartRelationalDatabase;

trait StartRelationalDatabaseTrait
{
    /**
     * @param StartRelationalDatabaseRequest $args
     * @return StartRelationalDatabaseResponse
     */
    public function startRelationalDatabase(StartRelationalDatabaseRequest $args)
    {
        $result = parent::startRelationalDatabase($args->toArray());
        return new StartRelationalDatabaseResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabase;

trait GetRelationalDatabaseTrait
{
    /**
     * @param GetRelationalDatabaseRequest $args
     * @return GetRelationalDatabaseResponse
     */
    public function getRelationalDatabase(GetRelationalDatabaseRequest $args)
    {
        $result = parent::getRelationalDatabase($args->toArray());
        return new GetRelationalDatabaseResponse($result->toArray());
    }
}

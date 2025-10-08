<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabases;

trait GetRelationalDatabasesTrait
{
    /**
     * @param GetRelationalDatabasesRequest $args
     * @return GetRelationalDatabasesResponse
     */
    public function getRelationalDatabases(GetRelationalDatabasesRequest $args)
    {
        $result = parent::getRelationalDatabases($args->toArray());
        return new GetRelationalDatabasesResponse($result->toArray());
    }
}

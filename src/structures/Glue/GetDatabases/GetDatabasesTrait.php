<?php

namespace Sunaoka\Aws\Structures\Glue\GetDatabases;

trait GetDatabasesTrait
{
    /**
     * @param GetDatabasesRequest $args
     * @return GetDatabasesResponse
     */
    public function getDatabases(GetDatabasesRequest $args)
    {
        $result = parent::getDatabases($args->toArray());
        return new GetDatabasesResponse($result->toArray());
    }
}

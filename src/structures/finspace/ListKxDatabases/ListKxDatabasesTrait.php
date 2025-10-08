<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxDatabases;

trait ListKxDatabasesTrait
{
    /**
     * @param ListKxDatabasesRequest $args
     * @return ListKxDatabasesResponse
     */
    public function listKxDatabases(ListKxDatabasesRequest $args)
    {
        $result = parent::listKxDatabases($args->toArray());
        return new ListKxDatabasesResponse($result->toArray());
    }
}

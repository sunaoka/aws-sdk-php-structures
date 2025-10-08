<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListDatabases;

trait ListDatabasesTrait
{
    /**
     * @param ListDatabasesRequest $args
     * @return ListDatabasesResponse
     */
    public function listDatabases(ListDatabasesRequest $args)
    {
        $result = parent::listDatabases($args->toArray());
        return new ListDatabasesResponse($result->toArray());
    }
}

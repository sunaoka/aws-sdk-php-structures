<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListGlobalTables;

trait ListGlobalTablesTrait
{
    /**
     * @param ListGlobalTablesRequest $args
     * @return ListGlobalTablesResponse
     */
    public function listGlobalTables(ListGlobalTablesRequest $args)
    {
        $result = parent::listGlobalTables($args->toArray());
        return new ListGlobalTablesResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Glue\GetTables;

trait GetTablesTrait
{
    /**
     * @param GetTablesRequest $args
     * @return GetTablesResponse
     */
    public function getTables(GetTablesRequest $args)
    {
        $result = parent::getTables($args->toArray());
        return new GetTablesResponse($result->toArray());
    }
}

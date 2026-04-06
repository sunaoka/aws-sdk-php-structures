<?php

namespace Sunaoka\Aws\Structures\Connect\ListDataTables;

trait ListDataTablesTrait
{
    /**
     * @param ListDataTablesRequest $args
     * @return ListDataTablesResponse
     */
    public function listDataTables(ListDataTablesRequest $args)
    {
        $result = parent::listDataTables($args->toArray());
        return new ListDataTablesResponse($result->toArray());
    }
}

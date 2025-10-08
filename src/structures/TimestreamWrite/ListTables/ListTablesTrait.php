<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\ListTables;

trait ListTablesTrait
{
    /**
     * @param ListTablesRequest $args
     * @return ListTablesResponse
     */
    public function listTables(ListTablesRequest $args)
    {
        $result = parent::listTables($args->toArray());
        return new ListTablesResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\S3Tables\ListTables;

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

<?php

namespace Sunaoka\Aws\Structures\Honeycode\QueryTableRows;

trait QueryTableRowsTrait
{
    /**
     * @param QueryTableRowsRequest $args
     * @return QueryTableRowsResponse
     */
    public function queryTableRows(QueryTableRowsRequest $args)
    {
        $result = parent::queryTableRows($args->toArray());
        return new QueryTableRowsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Honeycode\BatchCreateTableRows;

trait BatchCreateTableRowsTrait
{
    /**
     * @param BatchCreateTableRowsRequest $args
     * @return BatchCreateTableRowsResponse
     */
    public function batchCreateTableRows(BatchCreateTableRowsRequest $args)
    {
        $result = parent::batchCreateTableRows($args->toArray());
        return new BatchCreateTableRowsResponse($result->toArray());
    }
}

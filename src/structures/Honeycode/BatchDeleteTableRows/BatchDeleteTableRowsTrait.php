<?php

namespace Sunaoka\Aws\Structures\Honeycode\BatchDeleteTableRows;

trait BatchDeleteTableRowsTrait
{
    /**
     * @param BatchDeleteTableRowsRequest $args
     * @return BatchDeleteTableRowsResponse
     */
    public function batchDeleteTableRows(BatchDeleteTableRowsRequest $args)
    {
        $result = parent::batchDeleteTableRows($args->toArray());
        return new BatchDeleteTableRowsResponse($result->toArray());
    }
}

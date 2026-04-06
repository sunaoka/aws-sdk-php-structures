<?php

namespace Sunaoka\Aws\Structures\Honeycode\BatchUpdateTableRows;

trait BatchUpdateTableRowsTrait
{
    /**
     * @param BatchUpdateTableRowsRequest $args
     * @return BatchUpdateTableRowsResponse
     */
    public function batchUpdateTableRows(BatchUpdateTableRowsRequest $args)
    {
        $result = parent::batchUpdateTableRows($args->toArray());
        return new BatchUpdateTableRowsResponse($result->toArray());
    }
}

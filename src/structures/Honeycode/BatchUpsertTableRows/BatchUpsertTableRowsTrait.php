<?php

namespace Sunaoka\Aws\Structures\Honeycode\BatchUpsertTableRows;

trait BatchUpsertTableRowsTrait
{
    /**
     * @param BatchUpsertTableRowsRequest $args
     * @return BatchUpsertTableRowsResponse
     */
    public function batchUpsertTableRows(BatchUpsertTableRowsRequest $args)
    {
        $result = parent::batchUpsertTableRows($args->toArray());
        return new BatchUpsertTableRowsResponse($result->toArray());
    }
}

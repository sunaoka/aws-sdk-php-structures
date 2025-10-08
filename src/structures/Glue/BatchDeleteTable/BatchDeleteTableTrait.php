<?php

namespace Sunaoka\Aws\Structures\Glue\BatchDeleteTable;

trait BatchDeleteTableTrait
{
    /**
     * @param BatchDeleteTableRequest $args
     * @return BatchDeleteTableResponse
     */
    public function batchDeleteTable(BatchDeleteTableRequest $args)
    {
        $result = parent::batchDeleteTable($args->toArray());
        return new BatchDeleteTableResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Omics\ListRunsInBatch;

trait ListRunsInBatchTrait
{
    /**
     * @param ListRunsInBatchRequest $args
     * @return ListRunsInBatchResponse
     */
    public function listRunsInBatch(ListRunsInBatchRequest $args)
    {
        $result = parent::listRunsInBatch($args->toArray());
        return new ListRunsInBatchResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Omics\ListBatch;

trait ListBatchTrait
{
    /**
     * @param ListBatchRequest $args
     * @return ListBatchResponse
     */
    public function listBatch(ListBatchRequest $args)
    {
        $result = parent::listBatch($args->toArray());
        return new ListBatchResponse($result->toArray());
    }
}

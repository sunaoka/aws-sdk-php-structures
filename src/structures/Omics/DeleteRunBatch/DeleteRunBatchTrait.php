<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteRunBatch;

trait DeleteRunBatchTrait
{
    /**
     * @param DeleteRunBatchRequest $args
     * @return DeleteRunBatchResponse
     */
    public function deleteRunBatch(DeleteRunBatchRequest $args)
    {
        $result = parent::deleteRunBatch($args->toArray());
        return new DeleteRunBatchResponse($result->toArray());
    }
}

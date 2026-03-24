<?php

namespace Sunaoka\Aws\Structures\Omics\StartRunBatch;

trait StartRunBatchTrait
{
    /**
     * @param StartRunBatchRequest $args
     * @return StartRunBatchResponse
     */
    public function startRunBatch(StartRunBatchRequest $args)
    {
        $result = parent::startRunBatch($args->toArray());
        return new StartRunBatchResponse($result->toArray());
    }
}

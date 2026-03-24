<?php

namespace Sunaoka\Aws\Structures\Omics\GetBatch;

trait GetBatchTrait
{
    /**
     * @param GetBatchRequest $args
     * @return GetBatchResponse
     */
    public function getBatch(GetBatchRequest $args)
    {
        $result = parent::getBatch($args->toArray());
        return new GetBatchResponse($result->toArray());
    }
}

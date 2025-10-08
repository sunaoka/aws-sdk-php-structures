<?php

namespace Sunaoka\Aws\Structures\CodeBuild\RetryBuildBatch;

trait RetryBuildBatchTrait
{
    /**
     * @param RetryBuildBatchRequest $args
     * @return RetryBuildBatchResponse
     */
    public function retryBuildBatch(RetryBuildBatchRequest $args)
    {
        $result = parent::retryBuildBatch($args->toArray());
        return new RetryBuildBatchResponse($result->toArray());
    }
}

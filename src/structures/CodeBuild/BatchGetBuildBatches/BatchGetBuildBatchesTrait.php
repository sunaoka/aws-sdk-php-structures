<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetBuildBatches;

trait BatchGetBuildBatchesTrait
{
    /**
     * @param BatchGetBuildBatchesRequest $args
     * @return BatchGetBuildBatchesResponse
     */
    public function batchGetBuildBatches(BatchGetBuildBatchesRequest $args)
    {
        $result = parent::batchGetBuildBatches($args->toArray());
        return new BatchGetBuildBatchesResponse($result->toArray());
    }
}

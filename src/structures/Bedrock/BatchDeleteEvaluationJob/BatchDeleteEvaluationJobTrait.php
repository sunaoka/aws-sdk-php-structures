<?php

namespace Sunaoka\Aws\Structures\Bedrock\BatchDeleteEvaluationJob;

trait BatchDeleteEvaluationJobTrait
{
    /**
     * @param BatchDeleteEvaluationJobRequest $args
     * @return BatchDeleteEvaluationJobResponse
     */
    public function batchDeleteEvaluationJob(BatchDeleteEvaluationJobRequest $args)
    {
        $result = parent::batchDeleteEvaluationJob($args->toArray());
        return new BatchDeleteEvaluationJobResponse($result->toArray());
    }
}

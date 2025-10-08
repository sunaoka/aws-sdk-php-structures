<?php

namespace Sunaoka\Aws\Structures\Bedrock\StopEvaluationJob;

trait StopEvaluationJobTrait
{
    /**
     * @param StopEvaluationJobRequest $args
     * @return StopEvaluationJobResponse
     */
    public function stopEvaluationJob(StopEvaluationJobRequest $args)
    {
        $result = parent::stopEvaluationJob($args->toArray());
        return new StopEvaluationJobResponse($result->toArray());
    }
}

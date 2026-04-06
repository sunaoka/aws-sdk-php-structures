<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob;

trait GetEvaluationJobTrait
{
    /**
     * @param GetEvaluationJobRequest $args
     * @return GetEvaluationJobResponse
     */
    public function getEvaluationJob(GetEvaluationJobRequest $args)
    {
        $result = parent::getEvaluationJob($args->toArray());
        return new GetEvaluationJobResponse($result->toArray());
    }
}

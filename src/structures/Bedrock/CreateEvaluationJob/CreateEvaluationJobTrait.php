<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob;

trait CreateEvaluationJobTrait
{
    /**
     * @param CreateEvaluationJobRequest $args
     * @return CreateEvaluationJobResponse
     */
    public function createEvaluationJob(CreateEvaluationJobRequest $args)
    {
        $result = parent::createEvaluationJob($args->toArray());
        return new CreateEvaluationJobResponse($result->toArray());
    }
}

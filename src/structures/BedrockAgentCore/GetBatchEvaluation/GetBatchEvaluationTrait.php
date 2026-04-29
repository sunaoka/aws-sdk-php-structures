<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation;

trait GetBatchEvaluationTrait
{
    /**
     * @param GetBatchEvaluationRequest $args
     * @return GetBatchEvaluationResponse
     */
    public function getBatchEvaluation(GetBatchEvaluationRequest $args)
    {
        $result = parent::getBatchEvaluation($args->toArray());
        return new GetBatchEvaluationResponse($result->toArray());
    }
}

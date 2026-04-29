<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBatchEvaluation;

trait StartBatchEvaluationTrait
{
    /**
     * @param StartBatchEvaluationRequest $args
     * @return StartBatchEvaluationResponse
     */
    public function startBatchEvaluation(StartBatchEvaluationRequest $args)
    {
        $result = parent::startBatchEvaluation($args->toArray());
        return new StartBatchEvaluationResponse($result->toArray());
    }
}

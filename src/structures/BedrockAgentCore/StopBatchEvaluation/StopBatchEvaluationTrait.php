<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StopBatchEvaluation;

trait StopBatchEvaluationTrait
{
    /**
     * @param StopBatchEvaluationRequest $args
     * @return StopBatchEvaluationResponse
     */
    public function stopBatchEvaluation(StopBatchEvaluationRequest $args)
    {
        $result = parent::stopBatchEvaluation($args->toArray());
        return new StopBatchEvaluationResponse($result->toArray());
    }
}

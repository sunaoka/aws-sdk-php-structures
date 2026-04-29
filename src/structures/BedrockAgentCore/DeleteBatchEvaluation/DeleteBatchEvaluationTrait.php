<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeleteBatchEvaluation;

trait DeleteBatchEvaluationTrait
{
    /**
     * @param DeleteBatchEvaluationRequest $args
     * @return DeleteBatchEvaluationResponse
     */
    public function deleteBatchEvaluation(DeleteBatchEvaluationRequest $args)
    {
        $result = parent::deleteBatchEvaluation($args->toArray());
        return new DeleteBatchEvaluationResponse($result->toArray());
    }
}

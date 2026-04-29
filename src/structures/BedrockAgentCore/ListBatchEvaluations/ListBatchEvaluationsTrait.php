<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListBatchEvaluations;

trait ListBatchEvaluationsTrait
{
    /**
     * @param ListBatchEvaluationsRequest $args
     * @return ListBatchEvaluationsResponse
     */
    public function listBatchEvaluations(ListBatchEvaluationsRequest $args)
    {
        $result = parent::listBatchEvaluations($args->toArray());
        return new ListBatchEvaluationsResponse($result->toArray());
    }
}

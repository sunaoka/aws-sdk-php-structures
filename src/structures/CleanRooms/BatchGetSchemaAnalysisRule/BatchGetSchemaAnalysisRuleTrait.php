<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetSchemaAnalysisRule;

trait BatchGetSchemaAnalysisRuleTrait
{
    /**
     * @param BatchGetSchemaAnalysisRuleRequest $args
     * @return BatchGetSchemaAnalysisRuleResponse
     */
    public function batchGetSchemaAnalysisRule(BatchGetSchemaAnalysisRuleRequest $args)
    {
        $result = parent::batchGetSchemaAnalysisRule($args->toArray());
        return new BatchGetSchemaAnalysisRuleResponse($result->toArray());
    }
}

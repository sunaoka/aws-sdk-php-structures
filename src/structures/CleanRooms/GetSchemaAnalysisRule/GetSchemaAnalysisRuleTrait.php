<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetSchemaAnalysisRule;

trait GetSchemaAnalysisRuleTrait
{
    /**
     * @param GetSchemaAnalysisRuleRequest $args
     * @return GetSchemaAnalysisRuleResponse
     */
    public function getSchemaAnalysisRule(GetSchemaAnalysisRuleRequest $args)
    {
        $result = parent::getSchemaAnalysisRule($args->toArray());
        return new GetSchemaAnalysisRuleResponse($result->toArray());
    }
}

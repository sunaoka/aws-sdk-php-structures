<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateComplianceDetailsByConfigRule;

trait GetAggregateComplianceDetailsByConfigRuleTrait
{
    /**
     * @param GetAggregateComplianceDetailsByConfigRuleRequest $args
     * @return GetAggregateComplianceDetailsByConfigRuleResponse
     */
    public function getAggregateComplianceDetailsByConfigRule(GetAggregateComplianceDetailsByConfigRuleRequest $args)
    {
        $result = parent::getAggregateComplianceDetailsByConfigRule($args->toArray());
        return new GetAggregateComplianceDetailsByConfigRuleResponse($result->toArray());
    }
}

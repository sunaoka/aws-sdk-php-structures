<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetComplianceDetailsByConfigRule;

trait GetComplianceDetailsByConfigRuleTrait
{
    /**
     * @param GetComplianceDetailsByConfigRuleRequest $args
     * @return GetComplianceDetailsByConfigRuleResponse
     */
    public function getComplianceDetailsByConfigRule(GetComplianceDetailsByConfigRuleRequest $args)
    {
        $result = parent::getComplianceDetailsByConfigRule($args->toArray());
        return new GetComplianceDetailsByConfigRuleResponse($result->toArray());
    }
}

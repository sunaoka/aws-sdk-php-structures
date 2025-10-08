<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetComplianceSummaryByConfigRule;

trait GetComplianceSummaryByConfigRuleTrait
{
    /**
     * @return GetComplianceSummaryByConfigRuleResponse
     */
    public function getComplianceSummaryByConfigRule()
    {
        $result = parent::getComplianceSummaryByConfigRule();
        return new GetComplianceSummaryByConfigRuleResponse($result->toArray());
    }
}

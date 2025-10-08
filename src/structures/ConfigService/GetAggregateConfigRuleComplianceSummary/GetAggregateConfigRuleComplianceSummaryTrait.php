<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateConfigRuleComplianceSummary;

trait GetAggregateConfigRuleComplianceSummaryTrait
{
    /**
     * @param GetAggregateConfigRuleComplianceSummaryRequest $args
     * @return GetAggregateConfigRuleComplianceSummaryResponse
     */
    public function getAggregateConfigRuleComplianceSummary(GetAggregateConfigRuleComplianceSummaryRequest $args)
    {
        $result = parent::getAggregateConfigRuleComplianceSummary($args->toArray());
        return new GetAggregateConfigRuleComplianceSummaryResponse($result->toArray());
    }
}

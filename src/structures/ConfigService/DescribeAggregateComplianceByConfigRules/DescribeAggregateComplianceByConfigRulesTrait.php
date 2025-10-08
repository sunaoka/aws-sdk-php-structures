<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregateComplianceByConfigRules;

trait DescribeAggregateComplianceByConfigRulesTrait
{
    /**
     * @param DescribeAggregateComplianceByConfigRulesRequest $args
     * @return DescribeAggregateComplianceByConfigRulesResponse
     */
    public function describeAggregateComplianceByConfigRules(DescribeAggregateComplianceByConfigRulesRequest $args)
    {
        $result = parent::describeAggregateComplianceByConfigRules($args->toArray());
        return new DescribeAggregateComplianceByConfigRulesResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeComplianceByConfigRule;

trait DescribeComplianceByConfigRuleTrait
{
    /**
     * @param DescribeComplianceByConfigRuleRequest $args
     * @return DescribeComplianceByConfigRuleResponse
     */
    public function describeComplianceByConfigRule(DescribeComplianceByConfigRuleRequest $args)
    {
        $result = parent::describeComplianceByConfigRule($args->toArray());
        return new DescribeComplianceByConfigRuleResponse($result->toArray());
    }
}

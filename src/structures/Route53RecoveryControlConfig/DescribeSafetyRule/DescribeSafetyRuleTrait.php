<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\DescribeSafetyRule;

trait DescribeSafetyRuleTrait
{
    /**
     * @param DescribeSafetyRuleRequest $args
     * @return DescribeSafetyRuleResponse
     */
    public function describeSafetyRule(DescribeSafetyRuleRequest $args)
    {
        $result = parent::describeSafetyRule($args->toArray());
        return new DescribeSafetyRuleResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetCustomDetectionRule;

trait GetCustomDetectionRuleTrait
{
    /**
     * @param GetCustomDetectionRuleRequest $args
     * @return GetCustomDetectionRuleResponse
     */
    public function getCustomDetectionRule(GetCustomDetectionRuleRequest $args)
    {
        $result = parent::getCustomDetectionRule($args->toArray());
        return new GetCustomDetectionRuleResponse($result->toArray());
    }
}

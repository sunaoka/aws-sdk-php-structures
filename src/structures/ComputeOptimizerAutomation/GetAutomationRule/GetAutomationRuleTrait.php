<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\GetAutomationRule;

trait GetAutomationRuleTrait
{
    /**
     * @param GetAutomationRuleRequest $args
     * @return GetAutomationRuleResponse
     */
    public function getAutomationRule(GetAutomationRuleRequest $args)
    {
        $result = parent::getAutomationRule($args->toArray());
        return new GetAutomationRuleResponse($result->toArray());
    }
}

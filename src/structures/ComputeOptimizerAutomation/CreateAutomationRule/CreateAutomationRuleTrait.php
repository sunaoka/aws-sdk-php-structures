<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\CreateAutomationRule;

trait CreateAutomationRuleTrait
{
    /**
     * @param CreateAutomationRuleRequest $args
     * @return CreateAutomationRuleResponse
     */
    public function createAutomationRule(CreateAutomationRuleRequest $args)
    {
        $result = parent::createAutomationRule($args->toArray());
        return new CreateAutomationRuleResponse($result->toArray());
    }
}

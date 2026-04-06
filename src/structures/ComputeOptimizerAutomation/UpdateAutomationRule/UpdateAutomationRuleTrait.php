<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\UpdateAutomationRule;

trait UpdateAutomationRuleTrait
{
    /**
     * @param UpdateAutomationRuleRequest $args
     * @return UpdateAutomationRuleResponse
     */
    public function updateAutomationRule(UpdateAutomationRuleRequest $args)
    {
        $result = parent::updateAutomationRule($args->toArray());
        return new UpdateAutomationRuleResponse($result->toArray());
    }
}

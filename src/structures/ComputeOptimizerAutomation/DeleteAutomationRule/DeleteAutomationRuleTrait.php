<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\DeleteAutomationRule;

trait DeleteAutomationRuleTrait
{
    /**
     * @param DeleteAutomationRuleRequest $args
     * @return DeleteAutomationRuleResponse
     */
    public function deleteAutomationRule(DeleteAutomationRuleRequest $args)
    {
        $result = parent::deleteAutomationRule($args->toArray());
        return new DeleteAutomationRuleResponse($result->toArray());
    }
}

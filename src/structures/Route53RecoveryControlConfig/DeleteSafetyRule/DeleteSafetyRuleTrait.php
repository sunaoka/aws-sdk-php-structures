<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\DeleteSafetyRule;

trait DeleteSafetyRuleTrait
{
    /**
     * @param DeleteSafetyRuleRequest $args
     * @return DeleteSafetyRuleResponse
     */
    public function deleteSafetyRule(DeleteSafetyRuleRequest $args)
    {
        $result = parent::deleteSafetyRule($args->toArray());
        return new DeleteSafetyRuleResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\UpdateSafetyRule;

trait UpdateSafetyRuleTrait
{
    /**
     * @param UpdateSafetyRuleRequest $args
     * @return UpdateSafetyRuleResponse
     */
    public function updateSafetyRule(UpdateSafetyRuleRequest $args)
    {
        $result = parent::updateSafetyRule($args->toArray());
        return new UpdateSafetyRuleResponse($result->toArray());
    }
}

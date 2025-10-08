<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\CreateSafetyRule;

trait CreateSafetyRuleTrait
{
    /**
     * @param CreateSafetyRuleRequest $args
     * @return CreateSafetyRuleResponse
     */
    public function createSafetyRule(CreateSafetyRuleRequest $args)
    {
        $result = parent::createSafetyRule($args->toArray());
        return new CreateSafetyRuleResponse($result->toArray());
    }
}

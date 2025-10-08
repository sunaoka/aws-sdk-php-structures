<?php

namespace Sunaoka\Aws\Structures\RecycleBin\LockRule;

trait LockRuleTrait
{
    /**
     * @param LockRuleRequest $args
     * @return LockRuleResponse
     */
    public function lockRule(LockRuleRequest $args)
    {
        $result = parent::lockRule($args->toArray());
        return new LockRuleResponse($result->toArray());
    }
}

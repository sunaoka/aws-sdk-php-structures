<?php

namespace Sunaoka\Aws\Structures\RecycleBin\UnlockRule;

trait UnlockRuleTrait
{
    /**
     * @param UnlockRuleRequest $args
     * @return UnlockRuleResponse
     */
    public function unlockRule(UnlockRuleRequest $args)
    {
        $result = parent::unlockRule($args->toArray());
        return new UnlockRuleResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\EventBridge\DisableRule;

trait DisableRuleTrait
{
    /**
     * @param DisableRuleRequest $args
     * @return void
     */
    public function disableRule(DisableRuleRequest $args)
    {
        parent::disableRule($args->toArray());
    }
}

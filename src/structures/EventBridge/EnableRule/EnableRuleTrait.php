<?php

namespace Sunaoka\Aws\Structures\EventBridge\EnableRule;

trait EnableRuleTrait
{
    /**
     * @param EnableRuleRequest $args
     * @return void
     */
    public function enableRule(EnableRuleRequest $args)
    {
        parent::enableRule($args->toArray());
    }
}

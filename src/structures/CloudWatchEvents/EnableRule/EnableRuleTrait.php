<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\EnableRule;

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

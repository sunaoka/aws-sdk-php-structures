<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DisableRule;

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

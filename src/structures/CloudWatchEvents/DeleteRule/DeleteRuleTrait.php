<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DeleteRule;

trait DeleteRuleTrait
{
    /**
     * @param DeleteRuleRequest $args
     * @return void
     */
    public function deleteRule(DeleteRuleRequest $args)
    {
        parent::deleteRule($args->toArray());
    }
}

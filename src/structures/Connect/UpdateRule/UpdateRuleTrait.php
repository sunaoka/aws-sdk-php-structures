<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRule;

trait UpdateRuleTrait
{
    /**
     * @param UpdateRuleRequest $args
     * @return void
     */
    public function updateRule(UpdateRuleRequest $args)
    {
        parent::updateRule($args->toArray());
    }
}

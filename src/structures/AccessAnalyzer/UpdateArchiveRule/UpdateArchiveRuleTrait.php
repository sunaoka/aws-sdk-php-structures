<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\UpdateArchiveRule;

trait UpdateArchiveRuleTrait
{
    /**
     * @param UpdateArchiveRuleRequest $args
     * @return void
     */
    public function updateArchiveRule(UpdateArchiveRuleRequest $args)
    {
        parent::updateArchiveRule($args->toArray());
    }
}

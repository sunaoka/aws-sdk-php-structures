<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ApplyArchiveRule;

trait ApplyArchiveRuleTrait
{
    /**
     * @param ApplyArchiveRuleRequest $args
     * @return void
     */
    public function applyArchiveRule(ApplyArchiveRuleRequest $args)
    {
        parent::applyArchiveRule($args->toArray());
    }
}

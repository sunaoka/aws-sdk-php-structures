<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateArchiveRule;

trait CreateArchiveRuleTrait
{
    /**
     * @param CreateArchiveRuleRequest $args
     * @return void
     */
    public function createArchiveRule(CreateArchiveRuleRequest $args)
    {
        parent::createArchiveRule($args->toArray());
    }
}

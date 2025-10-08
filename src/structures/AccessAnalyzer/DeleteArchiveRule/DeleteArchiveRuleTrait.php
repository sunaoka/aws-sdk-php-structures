<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\DeleteArchiveRule;

trait DeleteArchiveRuleTrait
{
    /**
     * @param DeleteArchiveRuleRequest $args
     * @return void
     */
    public function deleteArchiveRule(DeleteArchiveRuleRequest $args)
    {
        parent::deleteArchiveRule($args->toArray());
    }
}

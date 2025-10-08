<?php

namespace Sunaoka\Aws\Structures\Iot\ReplaceTopicRule;

trait ReplaceTopicRuleTrait
{
    /**
     * @param ReplaceTopicRuleRequest $args
     * @return void
     */
    public function replaceTopicRule(ReplaceTopicRuleRequest $args)
    {
        parent::replaceTopicRule($args->toArray());
    }
}

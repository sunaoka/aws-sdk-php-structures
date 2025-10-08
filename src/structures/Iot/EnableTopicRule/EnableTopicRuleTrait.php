<?php

namespace Sunaoka\Aws\Structures\Iot\EnableTopicRule;

trait EnableTopicRuleTrait
{
    /**
     * @param EnableTopicRuleRequest $args
     * @return void
     */
    public function enableTopicRule(EnableTopicRuleRequest $args)
    {
        parent::enableTopicRule($args->toArray());
    }
}

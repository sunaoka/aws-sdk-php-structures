<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRule;

trait CreateTopicRuleTrait
{
    /**
     * @param CreateTopicRuleRequest $args
     * @return void
     */
    public function createTopicRule(CreateTopicRuleRequest $args)
    {
        parent::createTopicRule($args->toArray());
    }
}

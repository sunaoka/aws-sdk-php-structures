<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteTopicRule;

trait DeleteTopicRuleTrait
{
    /**
     * @param DeleteTopicRuleRequest $args
     * @return void
     */
    public function deleteTopicRule(DeleteTopicRuleRequest $args)
    {
        parent::deleteTopicRule($args->toArray());
    }
}

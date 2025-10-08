<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule;

trait GetTopicRuleTrait
{
    /**
     * @param GetTopicRuleRequest $args
     * @return GetTopicRuleResponse
     */
    public function getTopicRule(GetTopicRuleRequest $args)
    {
        $result = parent::getTopicRule($args->toArray());
        return new GetTopicRuleResponse($result->toArray());
    }
}

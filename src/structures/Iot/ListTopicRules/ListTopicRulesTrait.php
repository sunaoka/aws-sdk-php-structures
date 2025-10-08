<?php

namespace Sunaoka\Aws\Structures\Iot\ListTopicRules;

trait ListTopicRulesTrait
{
    /**
     * @param ListTopicRulesRequest $args
     * @return ListTopicRulesResponse
     */
    public function listTopicRules(ListTopicRulesRequest $args)
    {
        $result = parent::listTopicRules($args->toArray());
        return new ListTopicRulesResponse($result->toArray());
    }
}

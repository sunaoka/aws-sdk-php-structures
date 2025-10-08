<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListTargetsByRule;

trait ListTargetsByRuleTrait
{
    /**
     * @param ListTargetsByRuleRequest $args
     * @return ListTargetsByRuleResponse
     */
    public function listTargetsByRule(ListTargetsByRuleRequest $args)
    {
        $result = parent::listTargetsByRule($args->toArray());
        return new ListTargetsByRuleResponse($result->toArray());
    }
}

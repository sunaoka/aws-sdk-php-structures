<?php

namespace Sunaoka\Aws\Structures\Notifications\GetEventRule;

trait GetEventRuleTrait
{
    /**
     * @param GetEventRuleRequest $args
     * @return GetEventRuleResponse
     */
    public function getEventRule(GetEventRuleRequest $args)
    {
        $result = parent::getEventRule($args->toArray());
        return new GetEventRuleResponse($result->toArray());
    }
}

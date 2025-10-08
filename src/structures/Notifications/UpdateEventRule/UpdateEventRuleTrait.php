<?php

namespace Sunaoka\Aws\Structures\Notifications\UpdateEventRule;

trait UpdateEventRuleTrait
{
    /**
     * @param UpdateEventRuleRequest $args
     * @return UpdateEventRuleResponse
     */
    public function updateEventRule(UpdateEventRuleRequest $args)
    {
        $result = parent::updateEventRule($args->toArray());
        return new UpdateEventRuleResponse($result->toArray());
    }
}

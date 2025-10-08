<?php

namespace Sunaoka\Aws\Structures\Notifications\DeleteEventRule;

trait DeleteEventRuleTrait
{
    /**
     * @param DeleteEventRuleRequest $args
     * @return DeleteEventRuleResponse
     */
    public function deleteEventRule(DeleteEventRuleRequest $args)
    {
        $result = parent::deleteEventRule($args->toArray());
        return new DeleteEventRuleResponse($result->toArray());
    }
}

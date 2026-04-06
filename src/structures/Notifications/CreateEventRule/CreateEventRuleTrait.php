<?php

namespace Sunaoka\Aws\Structures\Notifications\CreateEventRule;

trait CreateEventRuleTrait
{
    /**
     * @param CreateEventRuleRequest $args
     * @return CreateEventRuleResponse
     */
    public function createEventRule(CreateEventRuleRequest $args)
    {
        $result = parent::createEventRule($args->toArray());
        return new CreateEventRuleResponse($result->toArray());
    }
}

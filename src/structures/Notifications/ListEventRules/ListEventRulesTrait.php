<?php

namespace Sunaoka\Aws\Structures\Notifications\ListEventRules;

trait ListEventRulesTrait
{
    /**
     * @param ListEventRulesRequest $args
     * @return ListEventRulesResponse
     */
    public function listEventRules(ListEventRulesRequest $args)
    {
        $result = parent::listEventRules($args->toArray());
        return new ListEventRulesResponse($result->toArray());
    }
}

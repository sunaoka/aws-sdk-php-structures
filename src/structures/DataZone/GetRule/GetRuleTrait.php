<?php

namespace Sunaoka\Aws\Structures\DataZone\GetRule;

trait GetRuleTrait
{
    /**
     * @param GetRuleRequest $args
     * @return GetRuleResponse
     */
    public function getRule(GetRuleRequest $args)
    {
        $result = parent::getRule($args->toArray());
        return new GetRuleResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\ListSafetyRules;

trait ListSafetyRulesTrait
{
    /**
     * @param ListSafetyRulesRequest $args
     * @return ListSafetyRulesResponse
     */
    public function listSafetyRules(ListSafetyRulesRequest $args)
    {
        $result = parent::listSafetyRules($args->toArray());
        return new ListSafetyRulesResponse($result->toArray());
    }
}

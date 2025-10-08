<?php

namespace Sunaoka\Aws\Structures\Waf\ListRateBasedRules;

trait ListRateBasedRulesTrait
{
    /**
     * @param ListRateBasedRulesRequest $args
     * @return ListRateBasedRulesResponse
     */
    public function listRateBasedRules(ListRateBasedRulesRequest $args)
    {
        $result = parent::listRateBasedRules($args->toArray());
        return new ListRateBasedRulesResponse($result->toArray());
    }
}

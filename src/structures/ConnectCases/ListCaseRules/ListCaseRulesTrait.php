<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListCaseRules;

trait ListCaseRulesTrait
{
    /**
     * @param ListCaseRulesRequest $args
     * @return ListCaseRulesResponse
     */
    public function listCaseRules(ListCaseRulesRequest $args)
    {
        $result = parent::listCaseRules($args->toArray());
        return new ListCaseRulesResponse($result->toArray());
    }
}

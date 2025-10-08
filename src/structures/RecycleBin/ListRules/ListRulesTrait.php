<?php

namespace Sunaoka\Aws\Structures\RecycleBin\ListRules;

trait ListRulesTrait
{
    /**
     * @param ListRulesRequest $args
     * @return ListRulesResponse
     */
    public function listRules(ListRulesRequest $args)
    {
        $result = parent::listRules($args->toArray());
        return new ListRulesResponse($result->toArray());
    }
}

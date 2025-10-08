<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListAccessControlRules;

trait ListAccessControlRulesTrait
{
    /**
     * @param ListAccessControlRulesRequest $args
     * @return ListAccessControlRulesResponse
     */
    public function listAccessControlRules(ListAccessControlRulesRequest $args)
    {
        $result = parent::listAccessControlRules($args->toArray());
        return new ListAccessControlRulesResponse($result->toArray());
    }
}

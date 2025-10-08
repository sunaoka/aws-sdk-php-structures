<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\AuthorizeIpRules;

trait AuthorizeIpRulesTrait
{
    /**
     * @param AuthorizeIpRulesRequest $args
     * @return AuthorizeIpRulesResponse
     */
    public function authorizeIpRules(AuthorizeIpRulesRequest $args)
    {
        $result = parent::authorizeIpRules($args->toArray());
        return new AuthorizeIpRulesResponse($result->toArray());
    }
}

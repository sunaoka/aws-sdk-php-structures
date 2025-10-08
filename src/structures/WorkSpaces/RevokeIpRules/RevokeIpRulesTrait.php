<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\RevokeIpRules;

trait RevokeIpRulesTrait
{
    /**
     * @param RevokeIpRulesRequest $args
     * @return RevokeIpRulesResponse
     */
    public function revokeIpRules(RevokeIpRulesRequest $args)
    {
        $result = parent::revokeIpRules($args->toArray());
        return new RevokeIpRulesResponse($result->toArray());
    }
}

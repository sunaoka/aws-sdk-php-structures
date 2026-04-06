<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateProxyRules;

trait CreateProxyRulesTrait
{
    /**
     * @param CreateProxyRulesRequest $args
     * @return CreateProxyRulesResponse
     */
    public function createProxyRules(CreateProxyRulesRequest $args)
    {
        $result = parent::createProxyRules($args->toArray());
        return new CreateProxyRulesResponse($result->toArray());
    }
}

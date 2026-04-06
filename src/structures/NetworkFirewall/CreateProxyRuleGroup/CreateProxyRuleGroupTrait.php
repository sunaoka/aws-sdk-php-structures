<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateProxyRuleGroup;

trait CreateProxyRuleGroupTrait
{
    /**
     * @param CreateProxyRuleGroupRequest $args
     * @return CreateProxyRuleGroupResponse
     */
    public function createProxyRuleGroup(CreateProxyRuleGroupRequest $args)
    {
        $result = parent::createProxyRuleGroup($args->toArray());
        return new CreateProxyRuleGroupResponse($result->toArray());
    }
}

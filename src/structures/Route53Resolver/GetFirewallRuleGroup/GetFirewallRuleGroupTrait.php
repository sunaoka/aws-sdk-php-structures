<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetFirewallRuleGroup;

trait GetFirewallRuleGroupTrait
{
    /**
     * @param GetFirewallRuleGroupRequest $args
     * @return GetFirewallRuleGroupResponse
     */
    public function getFirewallRuleGroup(GetFirewallRuleGroupRequest $args)
    {
        $result = parent::getFirewallRuleGroup($args->toArray());
        return new GetFirewallRuleGroupResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\AssociateFirewallRuleGroup;

trait AssociateFirewallRuleGroupTrait
{
    /**
     * @param AssociateFirewallRuleGroupRequest $args
     * @return AssociateFirewallRuleGroupResponse
     */
    public function associateFirewallRuleGroup(AssociateFirewallRuleGroupRequest $args)
    {
        $result = parent::associateFirewallRuleGroup($args->toArray());
        return new AssociateFirewallRuleGroupResponse($result->toArray());
    }
}

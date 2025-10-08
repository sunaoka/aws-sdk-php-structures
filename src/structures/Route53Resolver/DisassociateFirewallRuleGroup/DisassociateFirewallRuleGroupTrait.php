<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DisassociateFirewallRuleGroup;

trait DisassociateFirewallRuleGroupTrait
{
    /**
     * @param DisassociateFirewallRuleGroupRequest $args
     * @return DisassociateFirewallRuleGroupResponse
     */
    public function disassociateFirewallRuleGroup(DisassociateFirewallRuleGroupRequest $args)
    {
        $result = parent::disassociateFirewallRuleGroup($args->toArray());
        return new DisassociateFirewallRuleGroupResponse($result->toArray());
    }
}

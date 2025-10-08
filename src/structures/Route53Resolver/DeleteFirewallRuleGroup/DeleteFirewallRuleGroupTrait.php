<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DeleteFirewallRuleGroup;

trait DeleteFirewallRuleGroupTrait
{
    /**
     * @param DeleteFirewallRuleGroupRequest $args
     * @return DeleteFirewallRuleGroupResponse
     */
    public function deleteFirewallRuleGroup(DeleteFirewallRuleGroupRequest $args)
    {
        $result = parent::deleteFirewallRuleGroup($args->toArray());
        return new DeleteFirewallRuleGroupResponse($result->toArray());
    }
}

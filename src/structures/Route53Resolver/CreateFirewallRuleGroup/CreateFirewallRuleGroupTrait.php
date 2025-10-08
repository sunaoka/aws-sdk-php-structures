<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateFirewallRuleGroup;

trait CreateFirewallRuleGroupTrait
{
    /**
     * @param CreateFirewallRuleGroupRequest $args
     * @return CreateFirewallRuleGroupResponse
     */
    public function createFirewallRuleGroup(CreateFirewallRuleGroupRequest $args)
    {
        $result = parent::createFirewallRuleGroup($args->toArray());
        return new CreateFirewallRuleGroupResponse($result->toArray());
    }
}

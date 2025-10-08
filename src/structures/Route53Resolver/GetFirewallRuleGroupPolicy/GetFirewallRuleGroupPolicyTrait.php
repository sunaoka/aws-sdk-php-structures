<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetFirewallRuleGroupPolicy;

trait GetFirewallRuleGroupPolicyTrait
{
    /**
     * @param GetFirewallRuleGroupPolicyRequest $args
     * @return GetFirewallRuleGroupPolicyResponse
     */
    public function getFirewallRuleGroupPolicy(GetFirewallRuleGroupPolicyRequest $args)
    {
        $result = parent::getFirewallRuleGroupPolicy($args->toArray());
        return new GetFirewallRuleGroupPolicyResponse($result->toArray());
    }
}

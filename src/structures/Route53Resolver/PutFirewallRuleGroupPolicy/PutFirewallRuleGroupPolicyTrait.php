<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\PutFirewallRuleGroupPolicy;

trait PutFirewallRuleGroupPolicyTrait
{
    /**
     * @param PutFirewallRuleGroupPolicyRequest $args
     * @return PutFirewallRuleGroupPolicyResponse
     */
    public function putFirewallRuleGroupPolicy(PutFirewallRuleGroupPolicyRequest $args)
    {
        $result = parent::putFirewallRuleGroupPolicy($args->toArray());
        return new PutFirewallRuleGroupPolicyResponse($result->toArray());
    }
}

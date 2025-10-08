<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewallPolicy;

trait DescribeFirewallPolicyTrait
{
    /**
     * @param DescribeFirewallPolicyRequest $args
     * @return DescribeFirewallPolicyResponse
     */
    public function describeFirewallPolicy(DescribeFirewallPolicyRequest $args)
    {
        $result = parent::describeFirewallPolicy($args->toArray());
        return new DescribeFirewallPolicyResponse($result->toArray());
    }
}

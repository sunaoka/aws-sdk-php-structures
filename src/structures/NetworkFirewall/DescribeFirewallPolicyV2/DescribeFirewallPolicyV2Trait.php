<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewallPolicyV2;

trait DescribeFirewallPolicyV2Trait
{
    /**
     * @param DescribeFirewallPolicyV2Request $args
     * @return DescribeFirewallPolicyV2Response
     */
    public function describeFirewallPolicyV2(DescribeFirewallPolicyV2Request $args)
    {
        $result = parent::describeFirewallPolicyV2($args->toArray());
        return new DescribeFirewallPolicyV2Response($result->toArray());
    }
}

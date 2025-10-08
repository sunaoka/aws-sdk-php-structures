<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewall;

trait DescribeFirewallTrait
{
    /**
     * @param DescribeFirewallRequest $args
     * @return DescribeFirewallResponse
     */
    public function describeFirewall(DescribeFirewallRequest $args)
    {
        $result = parent::describeFirewall($args->toArray());
        return new DescribeFirewallResponse($result->toArray());
    }
}

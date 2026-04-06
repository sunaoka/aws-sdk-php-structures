<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewallMetadata;

trait DescribeFirewallMetadataTrait
{
    /**
     * @param DescribeFirewallMetadataRequest $args
     * @return DescribeFirewallMetadataResponse
     */
    public function describeFirewallMetadata(DescribeFirewallMetadataRequest $args)
    {
        $result = parent::describeFirewallMetadata($args->toArray());
        return new DescribeFirewallMetadataResponse($result->toArray());
    }
}

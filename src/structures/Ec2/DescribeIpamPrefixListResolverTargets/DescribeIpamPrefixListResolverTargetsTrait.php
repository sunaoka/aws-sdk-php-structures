<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamPrefixListResolverTargets;

trait DescribeIpamPrefixListResolverTargetsTrait
{
    /**
     * @param DescribeIpamPrefixListResolverTargetsRequest $args
     * @return DescribeIpamPrefixListResolverTargetsResponse
     */
    public function describeIpamPrefixListResolverTargets(DescribeIpamPrefixListResolverTargetsRequest $args)
    {
        $result = parent::describeIpamPrefixListResolverTargets($args->toArray());
        return new DescribeIpamPrefixListResolverTargetsResponse($result->toArray());
    }
}

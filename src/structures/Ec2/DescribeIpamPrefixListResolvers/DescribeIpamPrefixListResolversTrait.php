<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamPrefixListResolvers;

trait DescribeIpamPrefixListResolversTrait
{
    /**
     * @param DescribeIpamPrefixListResolversRequest $args
     * @return DescribeIpamPrefixListResolversResponse
     */
    public function describeIpamPrefixListResolvers(DescribeIpamPrefixListResolversRequest $args)
    {
        $result = parent::describeIpamPrefixListResolvers($args->toArray());
        return new DescribeIpamPrefixListResolversResponse($result->toArray());
    }
}

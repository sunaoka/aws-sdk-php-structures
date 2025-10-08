<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkAcls;

trait DescribeNetworkAclsTrait
{
    /**
     * @param DescribeNetworkAclsRequest $args
     * @return DescribeNetworkAclsResponse
     */
    public function describeNetworkAcls(DescribeNetworkAclsRequest $args)
    {
        $result = parent::describeNetworkAcls($args->toArray());
        return new DescribeNetworkAclsResponse($result->toArray());
    }
}

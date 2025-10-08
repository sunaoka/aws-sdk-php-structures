<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamScopes;

trait DescribeIpamScopesTrait
{
    /**
     * @param DescribeIpamScopesRequest $args
     * @return DescribeIpamScopesResponse
     */
    public function describeIpamScopes(DescribeIpamScopesRequest $args)
    {
        $result = parent::describeIpamScopes($args->toArray());
        return new DescribeIpamScopesResponse($result->toArray());
    }
}

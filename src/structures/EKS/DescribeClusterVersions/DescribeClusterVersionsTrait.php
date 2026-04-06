<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions;

trait DescribeClusterVersionsTrait
{
    /**
     * @param DescribeClusterVersionsRequest $args
     * @return DescribeClusterVersionsResponse
     */
    public function describeClusterVersions(DescribeClusterVersionsRequest $args)
    {
        $result = parent::describeClusterVersions($args->toArray());
        return new DescribeClusterVersionsResponse($result->toArray());
    }
}

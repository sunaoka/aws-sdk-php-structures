<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeVirtualCluster;

trait DescribeVirtualClusterTrait
{
    /**
     * @param DescribeVirtualClusterRequest $args
     * @return DescribeVirtualClusterResponse
     */
    public function describeVirtualCluster(DescribeVirtualClusterRequest $args)
    {
        $result = parent::describeVirtualCluster($args->toArray());
        return new DescribeVirtualClusterResponse($result->toArray());
    }
}

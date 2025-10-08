<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeCluster;

trait DescribeClusterTrait
{
    /**
     * @param DescribeClusterRequest $args
     * @return DescribeClusterResponse
     */
    public function describeCluster(DescribeClusterRequest $args)
    {
        $result = parent::describeCluster($args->toArray());
        return new DescribeClusterResponse($result->toArray());
    }
}

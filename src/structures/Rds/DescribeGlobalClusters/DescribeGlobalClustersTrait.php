<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeGlobalClusters;

trait DescribeGlobalClustersTrait
{
    /**
     * @param DescribeGlobalClustersRequest $args
     * @return DescribeGlobalClustersResponse
     */
    public function describeGlobalClusters(DescribeGlobalClustersRequest $args)
    {
        $result = parent::describeGlobalClusters($args->toArray());
        return new DescribeGlobalClustersResponse($result->toArray());
    }
}

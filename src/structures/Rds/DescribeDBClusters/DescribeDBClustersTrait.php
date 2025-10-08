<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBClusters;

trait DescribeDBClustersTrait
{
    /**
     * @param DescribeDBClustersRequest $args
     * @return DescribeDBClustersResponse
     */
    public function describeDBClusters(DescribeDBClustersRequest $args)
    {
        $result = parent::describeDBClusters($args->toArray());
        return new DescribeDBClustersResponse($result->toArray());
    }
}

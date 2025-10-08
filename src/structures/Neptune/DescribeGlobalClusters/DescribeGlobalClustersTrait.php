<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeGlobalClusters;

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

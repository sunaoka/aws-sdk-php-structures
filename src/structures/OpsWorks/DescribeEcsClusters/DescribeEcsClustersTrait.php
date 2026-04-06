<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeEcsClusters;

trait DescribeEcsClustersTrait
{
    /**
     * @param DescribeEcsClustersRequest $args
     * @return DescribeEcsClustersResponse
     */
    public function describeEcsClusters(DescribeEcsClustersRequest $args)
    {
        $result = parent::describeEcsClusters($args->toArray());
        return new DescribeEcsClustersResponse($result->toArray());
    }
}

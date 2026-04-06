<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeRdsDbInstances;

trait DescribeRdsDbInstancesTrait
{
    /**
     * @param DescribeRdsDbInstancesRequest $args
     * @return DescribeRdsDbInstancesResponse
     */
    public function describeRdsDbInstances(DescribeRdsDbInstancesRequest $args)
    {
        $result = parent::describeRdsDbInstances($args->toArray());
        return new DescribeRdsDbInstancesResponse($result->toArray());
    }
}

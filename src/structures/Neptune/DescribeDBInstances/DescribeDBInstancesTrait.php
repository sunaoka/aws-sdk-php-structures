<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeDBInstances;

trait DescribeDBInstancesTrait
{
    /**
     * @param DescribeDBInstancesRequest $args
     * @return DescribeDBInstancesResponse
     */
    public function describeDBInstances(DescribeDBInstancesRequest $args)
    {
        $result = parent::describeDBInstances($args->toArray());
        return new DescribeDBInstancesResponse($result->toArray());
    }
}

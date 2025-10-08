<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeReservedDBInstances;

trait DescribeReservedDBInstancesTrait
{
    /**
     * @param DescribeReservedDBInstancesRequest $args
     * @return DescribeReservedDBInstancesResponse
     */
    public function describeReservedDBInstances(DescribeReservedDBInstancesRequest $args)
    {
        $result = parent::describeReservedDBInstances($args->toArray());
        return new DescribeReservedDBInstancesResponse($result->toArray());
    }
}

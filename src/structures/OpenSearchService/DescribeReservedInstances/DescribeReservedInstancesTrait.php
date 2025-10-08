<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeReservedInstances;

trait DescribeReservedInstancesTrait
{
    /**
     * @param DescribeReservedInstancesRequest $args
     * @return DescribeReservedInstancesResponse
     */
    public function describeReservedInstances(DescribeReservedInstancesRequest $args)
    {
        $result = parent::describeReservedInstances($args->toArray());
        return new DescribeReservedInstancesResponse($result->toArray());
    }
}

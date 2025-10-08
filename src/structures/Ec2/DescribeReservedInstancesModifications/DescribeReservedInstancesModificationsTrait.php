<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstancesModifications;

trait DescribeReservedInstancesModificationsTrait
{
    /**
     * @param DescribeReservedInstancesModificationsRequest $args
     * @return DescribeReservedInstancesModificationsResponse
     */
    public function describeReservedInstancesModifications(DescribeReservedInstancesModificationsRequest $args)
    {
        $result = parent::describeReservedInstancesModifications($args->toArray());
        return new DescribeReservedInstancesModificationsResponse($result->toArray());
    }
}

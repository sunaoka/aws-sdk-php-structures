<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeReservedDBInstancesOfferings;

trait DescribeReservedDBInstancesOfferingsTrait
{
    /**
     * @param DescribeReservedDBInstancesOfferingsRequest $args
     * @return DescribeReservedDBInstancesOfferingsResponse
     */
    public function describeReservedDBInstancesOfferings(DescribeReservedDBInstancesOfferingsRequest $args)
    {
        $result = parent::describeReservedDBInstancesOfferings($args->toArray());
        return new DescribeReservedDBInstancesOfferingsResponse($result->toArray());
    }
}

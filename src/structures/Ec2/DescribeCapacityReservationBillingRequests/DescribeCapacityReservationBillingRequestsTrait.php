<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationBillingRequests;

trait DescribeCapacityReservationBillingRequestsTrait
{
    /**
     * @param DescribeCapacityReservationBillingRequestsRequest $args
     * @return DescribeCapacityReservationBillingRequestsResponse
     */
    public function describeCapacityReservationBillingRequests(DescribeCapacityReservationBillingRequestsRequest $args)
    {
        $result = parent::describeCapacityReservationBillingRequests($args->toArray());
        return new DescribeCapacityReservationBillingRequestsResponse($result->toArray());
    }
}

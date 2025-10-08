<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationFleets;

trait DescribeCapacityReservationFleetsTrait
{
    /**
     * @param DescribeCapacityReservationFleetsRequest $args
     * @return DescribeCapacityReservationFleetsResponse
     */
    public function describeCapacityReservationFleets(DescribeCapacityReservationFleetsRequest $args)
    {
        $result = parent::describeCapacityReservationFleets($args->toArray());
        return new DescribeCapacityReservationFleetsResponse($result->toArray());
    }
}

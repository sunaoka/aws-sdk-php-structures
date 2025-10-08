<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHostReservations;

trait DescribeHostReservationsTrait
{
    /**
     * @param DescribeHostReservationsRequest $args
     * @return DescribeHostReservationsResponse
     */
    public function describeHostReservations(DescribeHostReservationsRequest $args)
    {
        $result = parent::describeHostReservations($args->toArray());
        return new DescribeHostReservationsResponse($result->toArray());
    }
}

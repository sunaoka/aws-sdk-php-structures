<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeReservation;

trait DescribeReservationTrait
{
    /**
     * @param DescribeReservationRequest $args
     * @return DescribeReservationResponse
     */
    public function describeReservation(DescribeReservationRequest $args)
    {
        $result = parent::describeReservation($args->toArray());
        return new DescribeReservationResponse($result->toArray());
    }
}

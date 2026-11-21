<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCapacityReservation;

trait DescribeCapacityReservationTrait
{
    /**
     * @param DescribeCapacityReservationRequest $args
     * @return DescribeCapacityReservationResponse
     */
    public function describeCapacityReservation(DescribeCapacityReservationRequest $args)
    {
        $result = parent::describeCapacityReservation($args->toArray());
        return new DescribeCapacityReservationResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHostReservationOfferings;

trait DescribeHostReservationOfferingsTrait
{
    /**
     * @param DescribeHostReservationOfferingsRequest $args
     * @return DescribeHostReservationOfferingsResponse
     */
    public function describeHostReservationOfferings(DescribeHostReservationOfferingsRequest $args)
    {
        $result = parent::describeHostReservationOfferings($args->toArray());
        return new DescribeHostReservationOfferingsResponse($result->toArray());
    }
}

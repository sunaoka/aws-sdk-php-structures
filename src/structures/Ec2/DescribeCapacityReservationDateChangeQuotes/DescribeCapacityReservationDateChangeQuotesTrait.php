<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationDateChangeQuotes;

trait DescribeCapacityReservationDateChangeQuotesTrait
{
    /**
     * @param DescribeCapacityReservationDateChangeQuotesRequest $args
     * @return DescribeCapacityReservationDateChangeQuotesResponse
     */
    public function describeCapacityReservationDateChangeQuotes(DescribeCapacityReservationDateChangeQuotesRequest $args)
    {
        $result = parent::describeCapacityReservationDateChangeQuotes($args->toArray());
        return new DescribeCapacityReservationDateChangeQuotesResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationCancellationQuotes;

trait DescribeCapacityReservationCancellationQuotesTrait
{
    /**
     * @param DescribeCapacityReservationCancellationQuotesRequest $args
     * @return DescribeCapacityReservationCancellationQuotesResponse
     */
    public function describeCapacityReservationCancellationQuotes(DescribeCapacityReservationCancellationQuotesRequest $args)
    {
        $result = parent::describeCapacityReservationCancellationQuotes($args->toArray());
        return new DescribeCapacityReservationCancellationQuotesResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityReservationCancellationQuote;

trait CreateCapacityReservationCancellationQuoteTrait
{
    /**
     * @param CreateCapacityReservationCancellationQuoteRequest $args
     * @return CreateCapacityReservationCancellationQuoteResponse
     */
    public function createCapacityReservationCancellationQuote(CreateCapacityReservationCancellationQuoteRequest $args)
    {
        $result = parent::createCapacityReservationCancellationQuote($args->toArray());
        return new CreateCapacityReservationCancellationQuoteResponse($result->toArray());
    }
}

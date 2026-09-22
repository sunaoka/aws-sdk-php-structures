<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityReservationDateChangeQuote;

trait CreateCapacityReservationDateChangeQuoteTrait
{
    /**
     * @param CreateCapacityReservationDateChangeQuoteRequest $args
     * @return CreateCapacityReservationDateChangeQuoteResponse
     */
    public function createCapacityReservationDateChangeQuote(CreateCapacityReservationDateChangeQuoteRequest $args)
    {
        $result = parent::createCapacityReservationDateChangeQuote($args->toArray());
        return new CreateCapacityReservationDateChangeQuoteResponse($result->toArray());
    }
}

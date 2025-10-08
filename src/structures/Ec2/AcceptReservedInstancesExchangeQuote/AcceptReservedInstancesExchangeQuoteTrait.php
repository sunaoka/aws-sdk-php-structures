<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptReservedInstancesExchangeQuote;

trait AcceptReservedInstancesExchangeQuoteTrait
{
    /**
     * @param AcceptReservedInstancesExchangeQuoteRequest $args
     * @return AcceptReservedInstancesExchangeQuoteResponse
     */
    public function acceptReservedInstancesExchangeQuote(AcceptReservedInstancesExchangeQuoteRequest $args)
    {
        $result = parent::acceptReservedInstancesExchangeQuote($args->toArray());
        return new AcceptReservedInstancesExchangeQuoteResponse($result->toArray());
    }
}

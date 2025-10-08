<?php

namespace Sunaoka\Aws\Structures\Ec2\GetReservedInstancesExchangeQuote;

trait GetReservedInstancesExchangeQuoteTrait
{
    /**
     * @param GetReservedInstancesExchangeQuoteRequest $args
     * @return GetReservedInstancesExchangeQuoteResponse
     */
    public function getReservedInstancesExchangeQuote(GetReservedInstancesExchangeQuoteRequest $args)
    {
        $result = parent::getReservedInstancesExchangeQuote($args->toArray());
        return new GetReservedInstancesExchangeQuoteResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Redshift\AcceptReservedNodeExchange;

trait AcceptReservedNodeExchangeTrait
{
    /**
     * @param AcceptReservedNodeExchangeRequest $args
     * @return AcceptReservedNodeExchangeResponse
     */
    public function acceptReservedNodeExchange(AcceptReservedNodeExchangeRequest $args)
    {
        $result = parent::acceptReservedNodeExchange($args->toArray());
        return new AcceptReservedNodeExchangeResponse($result->toArray());
    }
}

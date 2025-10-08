<?php

namespace Sunaoka\Aws\Structures\Redshift\GetReservedNodeExchangeOfferings;

trait GetReservedNodeExchangeOfferingsTrait
{
    /**
     * @param GetReservedNodeExchangeOfferingsRequest $args
     * @return GetReservedNodeExchangeOfferingsResponse
     */
    public function getReservedNodeExchangeOfferings(GetReservedNodeExchangeOfferingsRequest $args)
    {
        $result = parent::getReservedNodeExchangeOfferings($args->toArray());
        return new GetReservedNodeExchangeOfferingsResponse($result->toArray());
    }
}

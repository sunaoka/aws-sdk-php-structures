<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOffer;

trait GetOfferTrait
{
    /**
     * @param GetOfferRequest $args
     * @return GetOfferResponse
     */
    public function getOffer(GetOfferRequest $args)
    {
        $result = parent::getOffer($args->toArray());
        return new GetOfferResponse($result->toArray());
    }
}

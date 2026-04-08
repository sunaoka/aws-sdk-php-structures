<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferSet;

trait GetOfferSetTrait
{
    /**
     * @param GetOfferSetRequest $args
     * @return GetOfferSetResponse
     */
    public function getOfferSet(GetOfferSetRequest $args)
    {
        $result = parent::getOfferSet($args->toArray());
        return new GetOfferSetResponse($result->toArray());
    }
}

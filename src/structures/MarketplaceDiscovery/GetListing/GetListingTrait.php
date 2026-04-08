<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetListing;

trait GetListingTrait
{
    /**
     * @param GetListingRequest $args
     * @return GetListingResponse
     */
    public function getListing(GetListingRequest $args)
    {
        $result = parent::getListing($args->toArray());
        return new GetListingResponse($result->toArray());
    }
}

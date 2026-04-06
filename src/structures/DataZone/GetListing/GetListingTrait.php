<?php

namespace Sunaoka\Aws\Structures\DataZone\GetListing;

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

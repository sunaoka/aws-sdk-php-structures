<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings;

trait SearchListingsTrait
{
    /**
     * @param SearchListingsRequest $args
     * @return SearchListingsResponse
     */
    public function searchListings(SearchListingsRequest $args)
    {
        $result = parent::searchListings($args->toArray());
        return new SearchListingsResponse($result->toArray());
    }
}

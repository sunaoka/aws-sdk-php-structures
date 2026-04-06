<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchNearby;

trait SearchNearbyTrait
{
    /**
     * @param SearchNearbyRequest $args
     * @return SearchNearbyResponse
     */
    public function searchNearby(SearchNearbyRequest $args)
    {
        $result = parent::searchNearby($args->toArray());
        return new SearchNearbyResponse($result->toArray());
    }
}

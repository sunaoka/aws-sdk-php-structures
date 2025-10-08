<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForPosition;

trait SearchPlaceIndexForPositionTrait
{
    /**
     * @param SearchPlaceIndexForPositionRequest $args
     * @return SearchPlaceIndexForPositionResponse
     */
    public function searchPlaceIndexForPosition(SearchPlaceIndexForPositionRequest $args)
    {
        $result = parent::searchPlaceIndexForPosition($args->toArray());
        return new SearchPlaceIndexForPositionResponse($result->toArray());
    }
}

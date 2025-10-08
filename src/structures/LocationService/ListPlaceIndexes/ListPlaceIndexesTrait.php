<?php

namespace Sunaoka\Aws\Structures\LocationService\ListPlaceIndexes;

trait ListPlaceIndexesTrait
{
    /**
     * @param ListPlaceIndexesRequest $args
     * @return ListPlaceIndexesResponse
     */
    public function listPlaceIndexes(ListPlaceIndexesRequest $args)
    {
        $result = parent::listPlaceIndexes($args->toArray());
        return new ListPlaceIndexesResponse($result->toArray());
    }
}

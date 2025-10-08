<?php

namespace Sunaoka\Aws\Structures\LocationService\CreatePlaceIndex;

trait CreatePlaceIndexTrait
{
    /**
     * @param CreatePlaceIndexRequest $args
     * @return CreatePlaceIndexResponse
     */
    public function createPlaceIndex(CreatePlaceIndexRequest $args)
    {
        $result = parent::createPlaceIndex($args->toArray());
        return new CreatePlaceIndexResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdatePlaceIndex;

trait UpdatePlaceIndexTrait
{
    /**
     * @param UpdatePlaceIndexRequest $args
     * @return UpdatePlaceIndexResponse
     */
    public function updatePlaceIndex(UpdatePlaceIndexRequest $args)
    {
        $result = parent::updatePlaceIndex($args->toArray());
        return new UpdatePlaceIndexResponse($result->toArray());
    }
}

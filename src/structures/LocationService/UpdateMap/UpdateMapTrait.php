<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdateMap;

trait UpdateMapTrait
{
    /**
     * @param UpdateMapRequest $args
     * @return UpdateMapResponse
     */
    public function updateMap(UpdateMapRequest $args)
    {
        $result = parent::updateMap($args->toArray());
        return new UpdateMapResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\LocationService\DeletePlaceIndex;

trait DeletePlaceIndexTrait
{
    /**
     * @param DeletePlaceIndexRequest $args
     * @return DeletePlaceIndexResponse
     */
    public function deletePlaceIndex(DeletePlaceIndexRequest $args)
    {
        $result = parent::deletePlaceIndex($args->toArray());
        return new DeletePlaceIndexResponse($result->toArray());
    }
}

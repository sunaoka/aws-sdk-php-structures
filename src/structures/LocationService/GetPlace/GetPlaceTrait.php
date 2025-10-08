<?php

namespace Sunaoka\Aws\Structures\LocationService\GetPlace;

trait GetPlaceTrait
{
    /**
     * @param GetPlaceRequest $args
     * @return GetPlaceResponse
     */
    public function getPlace(GetPlaceRequest $args)
    {
        $result = parent::getPlace($args->toArray());
        return new GetPlaceResponse($result->toArray());
    }
}

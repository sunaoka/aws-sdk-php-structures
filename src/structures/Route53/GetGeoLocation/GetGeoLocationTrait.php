<?php

namespace Sunaoka\Aws\Structures\Route53\GetGeoLocation;

trait GetGeoLocationTrait
{
    /**
     * @param GetGeoLocationRequest $args
     * @return GetGeoLocationResponse
     */
    public function getGeoLocation(GetGeoLocationRequest $args)
    {
        $result = parent::getGeoLocation($args->toArray());
        return new GetGeoLocationResponse($result->toArray());
    }
}

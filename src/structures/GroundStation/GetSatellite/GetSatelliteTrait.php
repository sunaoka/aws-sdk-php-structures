<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetSatellite;

trait GetSatelliteTrait
{
    /**
     * @param GetSatelliteRequest $args
     * @return GetSatelliteResponse
     */
    public function getSatellite(GetSatelliteRequest $args)
    {
        $result = parent::getSatellite($args->toArray());
        return new GetSatelliteResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListSatellites;

trait ListSatellitesTrait
{
    /**
     * @param ListSatellitesRequest $args
     * @return ListSatellitesResponse
     */
    public function listSatellites(ListSatellitesRequest $args)
    {
        $result = parent::listSatellites($args->toArray());
        return new ListSatellitesResponse($result->toArray());
    }
}

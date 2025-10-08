<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListGroundStations;

trait ListGroundStationsTrait
{
    /**
     * @param ListGroundStationsRequest $args
     * @return ListGroundStationsResponse
     */
    public function listGroundStations(ListGroundStationsRequest $args)
    {
        $result = parent::listGroundStations($args->toArray());
        return new ListGroundStationsResponse($result->toArray());
    }
}

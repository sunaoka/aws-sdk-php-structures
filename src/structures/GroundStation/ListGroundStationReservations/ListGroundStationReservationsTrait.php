<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListGroundStationReservations;

trait ListGroundStationReservationsTrait
{
    /**
     * @param ListGroundStationReservationsRequest $args
     * @return ListGroundStationReservationsResponse
     */
    public function listGroundStationReservations(ListGroundStationReservationsRequest $args)
    {
        $result = parent::listGroundStationReservations($args->toArray());
        return new ListGroundStationReservationsResponse($result->toArray());
    }
}

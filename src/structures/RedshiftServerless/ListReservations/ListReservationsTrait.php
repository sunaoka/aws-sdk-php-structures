<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListReservations;

trait ListReservationsTrait
{
    /**
     * @param ListReservationsRequest $args
     * @return ListReservationsResponse
     */
    public function listReservations(ListReservationsRequest $args)
    {
        $result = parent::listReservations($args->toArray());
        return new ListReservationsResponse($result->toArray());
    }
}

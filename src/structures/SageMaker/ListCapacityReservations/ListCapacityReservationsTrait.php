<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListCapacityReservations;

trait ListCapacityReservationsTrait
{
    /**
     * @param ListCapacityReservationsRequest $args
     * @return ListCapacityReservationsResponse
     */
    public function listCapacityReservations(ListCapacityReservationsRequest $args)
    {
        $result = parent::listCapacityReservations($args->toArray());
        return new ListCapacityReservationsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListReservationOfferings;

trait ListReservationOfferingsTrait
{
    /**
     * @param ListReservationOfferingsRequest $args
     * @return ListReservationOfferingsResponse
     */
    public function listReservationOfferings(ListReservationOfferingsRequest $args)
    {
        $result = parent::listReservationOfferings($args->toArray());
        return new ListReservationOfferingsResponse($result->toArray());
    }
}

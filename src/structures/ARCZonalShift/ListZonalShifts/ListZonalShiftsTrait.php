<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\ListZonalShifts;

trait ListZonalShiftsTrait
{
    /**
     * @param ListZonalShiftsRequest $args
     * @return ListZonalShiftsResponse
     */
    public function listZonalShifts(ListZonalShiftsRequest $args)
    {
        $result = parent::listZonalShifts($args->toArray());
        return new ListZonalShiftsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\CancelZonalShift;

trait CancelZonalShiftTrait
{
    /**
     * @param CancelZonalShiftRequest $args
     * @return CancelZonalShiftResponse
     */
    public function cancelZonalShift(CancelZonalShiftRequest $args)
    {
        $result = parent::cancelZonalShift($args->toArray());
        return new CancelZonalShiftResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\StartZonalShift;

trait StartZonalShiftTrait
{
    /**
     * @param StartZonalShiftRequest $args
     * @return StartZonalShiftResponse
     */
    public function startZonalShift(StartZonalShiftRequest $args)
    {
        $result = parent::startZonalShift($args->toArray());
        return new StartZonalShiftResponse($result->toArray());
    }
}

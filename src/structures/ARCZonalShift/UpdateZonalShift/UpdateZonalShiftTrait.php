<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\UpdateZonalShift;

trait UpdateZonalShiftTrait
{
    /**
     * @param UpdateZonalShiftRequest $args
     * @return UpdateZonalShiftResponse
     */
    public function updateZonalShift(UpdateZonalShiftRequest $args)
    {
        $result = parent::updateZonalShift($args->toArray());
        return new UpdateZonalShiftResponse($result->toArray());
    }
}

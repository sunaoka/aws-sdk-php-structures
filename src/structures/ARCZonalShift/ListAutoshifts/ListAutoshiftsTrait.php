<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\ListAutoshifts;

trait ListAutoshiftsTrait
{
    /**
     * @param ListAutoshiftsRequest $args
     * @return ListAutoshiftsResponse
     */
    public function listAutoshifts(ListAutoshiftsRequest $args)
    {
        $result = parent::listAutoshifts($args->toArray());
        return new ListAutoshiftsResponse($result->toArray());
    }
}

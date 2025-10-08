<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListRotationShifts;

trait ListRotationShiftsTrait
{
    /**
     * @param ListRotationShiftsRequest $args
     * @return ListRotationShiftsResponse
     */
    public function listRotationShifts(ListRotationShiftsRequest $args)
    {
        $result = parent::listRotationShifts($args->toArray());
        return new ListRotationShiftsResponse($result->toArray());
    }
}

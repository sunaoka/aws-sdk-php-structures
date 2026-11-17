<?php

namespace Sunaoka\Aws\Structures\ConnectScheduling\RejectTimeOff;

trait RejectTimeOffTrait
{
    /**
     * @param RejectTimeOffRequest $args
     * @return RejectTimeOffResponse
     */
    public function rejectTimeOff(RejectTimeOffRequest $args)
    {
        $result = parent::rejectTimeOff($args->toArray());
        return new RejectTimeOffResponse($result->toArray());
    }
}

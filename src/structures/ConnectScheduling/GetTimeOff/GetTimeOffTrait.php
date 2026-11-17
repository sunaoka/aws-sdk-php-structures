<?php

namespace Sunaoka\Aws\Structures\ConnectScheduling\GetTimeOff;

trait GetTimeOffTrait
{
    /**
     * @param GetTimeOffRequest $args
     * @return GetTimeOffResponse
     */
    public function getTimeOff(GetTimeOffRequest $args)
    {
        $result = parent::getTimeOff($args->toArray());
        return new GetTimeOffResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\StartClock;

trait StartClockTrait
{
    /**
     * @param StartClockRequest $args
     * @return StartClockResponse
     */
    public function startClock(StartClockRequest $args)
    {
        $result = parent::startClock($args->toArray());
        return new StartClockResponse($result->toArray());
    }
}

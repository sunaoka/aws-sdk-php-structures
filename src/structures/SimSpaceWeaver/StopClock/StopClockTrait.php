<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\StopClock;

trait StopClockTrait
{
    /**
     * @param StopClockRequest $args
     * @return StopClockResponse
     */
    public function stopClock(StopClockRequest $args)
    {
        $result = parent::stopClock($args->toArray());
        return new StopClockResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\ConnectScheduling\CancelTimeOff;

trait CancelTimeOffTrait
{
    /**
     * @param CancelTimeOffRequest $args
     * @return CancelTimeOffResponse
     */
    public function cancelTimeOff(CancelTimeOffRequest $args)
    {
        $result = parent::cancelTimeOff($args->toArray());
        return new CancelTimeOffResponse($result->toArray());
    }
}

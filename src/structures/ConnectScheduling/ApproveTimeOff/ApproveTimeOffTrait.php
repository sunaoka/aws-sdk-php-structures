<?php

namespace Sunaoka\Aws\Structures\ConnectScheduling\ApproveTimeOff;

trait ApproveTimeOffTrait
{
    /**
     * @param ApproveTimeOffRequest $args
     * @return ApproveTimeOffResponse
     */
    public function approveTimeOff(ApproveTimeOffRequest $args)
    {
        $result = parent::approveTimeOff($args->toArray());
        return new ApproveTimeOffResponse($result->toArray());
    }
}

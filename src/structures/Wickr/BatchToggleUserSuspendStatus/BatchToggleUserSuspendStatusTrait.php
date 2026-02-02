<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchToggleUserSuspendStatus;

trait BatchToggleUserSuspendStatusTrait
{
    /**
     * @param BatchToggleUserSuspendStatusRequest $args
     * @return BatchToggleUserSuspendStatusResponse
     */
    public function batchToggleUserSuspendStatus(BatchToggleUserSuspendStatusRequest $args)
    {
        $result = parent::batchToggleUserSuspendStatus($args->toArray());
        return new BatchToggleUserSuspendStatusResponse($result->toArray());
    }
}

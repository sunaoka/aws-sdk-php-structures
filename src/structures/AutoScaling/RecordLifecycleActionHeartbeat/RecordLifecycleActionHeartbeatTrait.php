<?php

namespace Sunaoka\Aws\Structures\AutoScaling\RecordLifecycleActionHeartbeat;

trait RecordLifecycleActionHeartbeatTrait
{
    /**
     * @param RecordLifecycleActionHeartbeatRequest $args
     * @return RecordLifecycleActionHeartbeatResponse
     */
    public function recordLifecycleActionHeartbeat(RecordLifecycleActionHeartbeatRequest $args)
    {
        $result = parent::recordLifecycleActionHeartbeat($args->toArray());
        return new RecordLifecycleActionHeartbeatResponse($result->toArray());
    }
}

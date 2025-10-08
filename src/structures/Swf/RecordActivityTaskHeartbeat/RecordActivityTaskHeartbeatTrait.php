<?php

namespace Sunaoka\Aws\Structures\Swf\RecordActivityTaskHeartbeat;

trait RecordActivityTaskHeartbeatTrait
{
    /**
     * @param RecordActivityTaskHeartbeatRequest $args
     * @return RecordActivityTaskHeartbeatResponse
     */
    public function recordActivityTaskHeartbeat(RecordActivityTaskHeartbeatRequest $args)
    {
        $result = parent::recordActivityTaskHeartbeat($args->toArray());
        return new RecordActivityTaskHeartbeatResponse($result->toArray());
    }
}

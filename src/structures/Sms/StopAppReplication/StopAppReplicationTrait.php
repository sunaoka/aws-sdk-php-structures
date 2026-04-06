<?php

namespace Sunaoka\Aws\Structures\Sms\StopAppReplication;

trait StopAppReplicationTrait
{
    /**
     * @param StopAppReplicationRequest $args
     * @return StopAppReplicationResponse
     */
    public function stopAppReplication(StopAppReplicationRequest $args)
    {
        $result = parent::stopAppReplication($args->toArray());
        return new StopAppReplicationResponse($result->toArray());
    }
}

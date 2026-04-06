<?php

namespace Sunaoka\Aws\Structures\Sms\StartAppReplication;

trait StartAppReplicationTrait
{
    /**
     * @param StartAppReplicationRequest $args
     * @return StartAppReplicationResponse
     */
    public function startAppReplication(StartAppReplicationRequest $args)
    {
        $result = parent::startAppReplication($args->toArray());
        return new StartAppReplicationResponse($result->toArray());
    }
}

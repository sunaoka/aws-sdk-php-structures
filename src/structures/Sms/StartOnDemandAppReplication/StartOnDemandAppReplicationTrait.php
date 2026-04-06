<?php

namespace Sunaoka\Aws\Structures\Sms\StartOnDemandAppReplication;

trait StartOnDemandAppReplicationTrait
{
    /**
     * @param StartOnDemandAppReplicationRequest $args
     * @return StartOnDemandAppReplicationResponse
     */
    public function startOnDemandAppReplication(StartOnDemandAppReplicationRequest $args)
    {
        $result = parent::startOnDemandAppReplication($args->toArray());
        return new StartOnDemandAppReplicationResponse($result->toArray());
    }
}

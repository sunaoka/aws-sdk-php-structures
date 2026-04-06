<?php

namespace Sunaoka\Aws\Structures\Sms\StartOnDemandReplicationRun;

trait StartOnDemandReplicationRunTrait
{
    /**
     * @param StartOnDemandReplicationRunRequest $args
     * @return StartOnDemandReplicationRunResponse
     */
    public function startOnDemandReplicationRun(StartOnDemandReplicationRunRequest $args)
    {
        $result = parent::startOnDemandReplicationRun($args->toArray());
        return new StartOnDemandReplicationRunResponse($result->toArray());
    }
}

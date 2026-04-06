<?php

namespace Sunaoka\Aws\Structures\Sms\GetReplicationRuns;

trait GetReplicationRunsTrait
{
    /**
     * @param GetReplicationRunsRequest $args
     * @return GetReplicationRunsResponse
     */
    public function getReplicationRuns(GetReplicationRunsRequest $args)
    {
        $result = parent::getReplicationRuns($args->toArray());
        return new GetReplicationRunsResponse($result->toArray());
    }
}

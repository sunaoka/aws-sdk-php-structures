<?php

namespace Sunaoka\Aws\Structures\drs\StopSourceNetworkReplication;

trait StopSourceNetworkReplicationTrait
{
    /**
     * @param StopSourceNetworkReplicationRequest $args
     * @return StopSourceNetworkReplicationResponse
     */
    public function stopSourceNetworkReplication(StopSourceNetworkReplicationRequest $args)
    {
        $result = parent::stopSourceNetworkReplication($args->toArray());
        return new StopSourceNetworkReplicationResponse($result->toArray());
    }
}

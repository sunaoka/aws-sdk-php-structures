<?php

namespace Sunaoka\Aws\Structures\drs\StartSourceNetworkReplication;

trait StartSourceNetworkReplicationTrait
{
    /**
     * @param StartSourceNetworkReplicationRequest $args
     * @return StartSourceNetworkReplicationResponse
     */
    public function startSourceNetworkReplication(StartSourceNetworkReplicationRequest $args)
    {
        $result = parent::startSourceNetworkReplication($args->toArray());
        return new StartSourceNetworkReplicationResponse($result->toArray());
    }
}

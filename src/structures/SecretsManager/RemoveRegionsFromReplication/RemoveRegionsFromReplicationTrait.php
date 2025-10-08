<?php

namespace Sunaoka\Aws\Structures\SecretsManager\RemoveRegionsFromReplication;

trait RemoveRegionsFromReplicationTrait
{
    /**
     * @param RemoveRegionsFromReplicationRequest $args
     * @return RemoveRegionsFromReplicationResponse
     */
    public function removeRegionsFromReplication(RemoveRegionsFromReplicationRequest $args)
    {
        $result = parent::removeRegionsFromReplication($args->toArray());
        return new RemoveRegionsFromReplicationResponse($result->toArray());
    }
}

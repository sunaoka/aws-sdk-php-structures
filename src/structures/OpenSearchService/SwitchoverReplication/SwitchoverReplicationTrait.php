<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\SwitchoverReplication;

trait SwitchoverReplicationTrait
{
    /**
     * @param SwitchoverReplicationRequest $args
     * @return SwitchoverReplicationResponse
     */
    public function switchoverReplication(SwitchoverReplicationRequest $args)
    {
        $result = parent::switchoverReplication($args->toArray());
        return new SwitchoverReplicationResponse($result->toArray());
    }
}

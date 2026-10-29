<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\FailoverReplication;

trait FailoverReplicationTrait
{
    /**
     * @param FailoverReplicationRequest $args
     * @return FailoverReplicationResponse
     */
    public function failoverReplication(FailoverReplicationRequest $args)
    {
        $result = parent::failoverReplication($args->toArray());
        return new FailoverReplicationResponse($result->toArray());
    }
}

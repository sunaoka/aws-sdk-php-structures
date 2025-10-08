<?php

namespace Sunaoka\Aws\Structures\drs\ReverseReplication;

trait ReverseReplicationTrait
{
    /**
     * @param ReverseReplicationRequest $args
     * @return ReverseReplicationResponse
     */
    public function reverseReplication(ReverseReplicationRequest $args)
    {
        $result = parent::reverseReplication($args->toArray());
        return new ReverseReplicationResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\ElastiCache\FailoverGlobalReplicationGroup;

trait FailoverGlobalReplicationGroupTrait
{
    /**
     * @param FailoverGlobalReplicationGroupRequest $args
     * @return FailoverGlobalReplicationGroupResponse
     */
    public function failoverGlobalReplicationGroup(FailoverGlobalReplicationGroupRequest $args)
    {
        $result = parent::failoverGlobalReplicationGroup($args->toArray());
        return new FailoverGlobalReplicationGroupResponse($result->toArray());
    }
}

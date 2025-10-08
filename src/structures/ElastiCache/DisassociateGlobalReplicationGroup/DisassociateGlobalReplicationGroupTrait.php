<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DisassociateGlobalReplicationGroup;

trait DisassociateGlobalReplicationGroupTrait
{
    /**
     * @param DisassociateGlobalReplicationGroupRequest $args
     * @return DisassociateGlobalReplicationGroupResponse
     */
    public function disassociateGlobalReplicationGroup(DisassociateGlobalReplicationGroupRequest $args)
    {
        $result = parent::disassociateGlobalReplicationGroup($args->toArray());
        return new DisassociateGlobalReplicationGroupResponse($result->toArray());
    }
}

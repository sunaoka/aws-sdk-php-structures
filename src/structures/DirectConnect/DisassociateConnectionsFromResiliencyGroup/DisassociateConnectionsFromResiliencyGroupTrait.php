<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DisassociateConnectionsFromResiliencyGroup;

trait DisassociateConnectionsFromResiliencyGroupTrait
{
    /**
     * @param DisassociateConnectionsFromResiliencyGroupRequest $args
     * @return DisassociateConnectionsFromResiliencyGroupResponse
     */
    public function disassociateConnectionsFromResiliencyGroup(DisassociateConnectionsFromResiliencyGroupRequest $args)
    {
        $result = parent::disassociateConnectionsFromResiliencyGroup($args->toArray());
        return new DisassociateConnectionsFromResiliencyGroupResponse($result->toArray());
    }
}

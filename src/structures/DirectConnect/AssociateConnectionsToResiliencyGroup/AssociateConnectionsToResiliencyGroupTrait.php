<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AssociateConnectionsToResiliencyGroup;

trait AssociateConnectionsToResiliencyGroupTrait
{
    /**
     * @param AssociateConnectionsToResiliencyGroupRequest $args
     * @return AssociateConnectionsToResiliencyGroupResponse
     */
    public function associateConnectionsToResiliencyGroup(AssociateConnectionsToResiliencyGroupRequest $args)
    {
        $result = parent::associateConnectionsToResiliencyGroup($args->toArray());
        return new AssociateConnectionsToResiliencyGroupResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateReplicationSubnetGroup;

trait CreateReplicationSubnetGroupTrait
{
    /**
     * @param CreateReplicationSubnetGroupRequest $args
     * @return CreateReplicationSubnetGroupResponse
     */
    public function createReplicationSubnetGroup(CreateReplicationSubnetGroupRequest $args)
    {
        $result = parent::createReplicationSubnetGroup($args->toArray());
        return new CreateReplicationSubnetGroupResponse($result->toArray());
    }
}

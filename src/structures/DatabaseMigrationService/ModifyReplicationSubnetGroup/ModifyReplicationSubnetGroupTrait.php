<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyReplicationSubnetGroup;

trait ModifyReplicationSubnetGroupTrait
{
    /**
     * @param ModifyReplicationSubnetGroupRequest $args
     * @return ModifyReplicationSubnetGroupResponse
     */
    public function modifyReplicationSubnetGroup(ModifyReplicationSubnetGroupRequest $args)
    {
        $result = parent::modifyReplicationSubnetGroup($args->toArray());
        return new ModifyReplicationSubnetGroupResponse($result->toArray());
    }
}

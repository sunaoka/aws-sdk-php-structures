<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteReplicationSubnetGroup;

trait DeleteReplicationSubnetGroupTrait
{
    /**
     * @param DeleteReplicationSubnetGroupRequest $args
     * @return DeleteReplicationSubnetGroupResponse
     */
    public function deleteReplicationSubnetGroup(DeleteReplicationSubnetGroupRequest $args)
    {
        $result = parent::deleteReplicationSubnetGroup($args->toArray());
        return new DeleteReplicationSubnetGroupResponse($result->toArray());
    }
}

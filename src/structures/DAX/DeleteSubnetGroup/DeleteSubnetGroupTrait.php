<?php

namespace Sunaoka\Aws\Structures\DAX\DeleteSubnetGroup;

trait DeleteSubnetGroupTrait
{
    /**
     * @param DeleteSubnetGroupRequest $args
     * @return DeleteSubnetGroupResponse
     */
    public function deleteSubnetGroup(DeleteSubnetGroupRequest $args)
    {
        $result = parent::deleteSubnetGroup($args->toArray());
        return new DeleteSubnetGroupResponse($result->toArray());
    }
}

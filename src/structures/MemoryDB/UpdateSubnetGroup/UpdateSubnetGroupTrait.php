<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateSubnetGroup;

trait UpdateSubnetGroupTrait
{
    /**
     * @param UpdateSubnetGroupRequest $args
     * @return UpdateSubnetGroupResponse
     */
    public function updateSubnetGroup(UpdateSubnetGroupRequest $args)
    {
        $result = parent::updateSubnetGroup($args->toArray());
        return new UpdateSubnetGroupResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\DAX\UpdateSubnetGroup;

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

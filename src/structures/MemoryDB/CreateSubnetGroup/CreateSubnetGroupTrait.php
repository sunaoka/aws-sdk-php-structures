<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateSubnetGroup;

trait CreateSubnetGroupTrait
{
    /**
     * @param CreateSubnetGroupRequest $args
     * @return CreateSubnetGroupResponse
     */
    public function createSubnetGroup(CreateSubnetGroupRequest $args)
    {
        $result = parent::createSubnetGroup($args->toArray());
        return new CreateSubnetGroupResponse($result->toArray());
    }
}

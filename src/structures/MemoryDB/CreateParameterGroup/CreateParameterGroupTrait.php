<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateParameterGroup;

trait CreateParameterGroupTrait
{
    /**
     * @param CreateParameterGroupRequest $args
     * @return CreateParameterGroupResponse
     */
    public function createParameterGroup(CreateParameterGroupRequest $args)
    {
        $result = parent::createParameterGroup($args->toArray());
        return new CreateParameterGroupResponse($result->toArray());
    }
}

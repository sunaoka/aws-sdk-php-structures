<?php

namespace Sunaoka\Aws\Structures\Iot\CreateDynamicThingGroup;

trait CreateDynamicThingGroupTrait
{
    /**
     * @param CreateDynamicThingGroupRequest $args
     * @return CreateDynamicThingGroupResponse
     */
    public function createDynamicThingGroup(CreateDynamicThingGroupRequest $args)
    {
        $result = parent::createDynamicThingGroup($args->toArray());
        return new CreateDynamicThingGroupResponse($result->toArray());
    }
}

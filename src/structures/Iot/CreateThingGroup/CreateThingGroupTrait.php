<?php

namespace Sunaoka\Aws\Structures\Iot\CreateThingGroup;

trait CreateThingGroupTrait
{
    /**
     * @param CreateThingGroupRequest $args
     * @return CreateThingGroupResponse
     */
    public function createThingGroup(CreateThingGroupRequest $args)
    {
        $result = parent::createThingGroup($args->toArray());
        return new CreateThingGroupResponse($result->toArray());
    }
}

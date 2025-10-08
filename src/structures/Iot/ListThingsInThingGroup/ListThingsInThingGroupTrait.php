<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingsInThingGroup;

trait ListThingsInThingGroupTrait
{
    /**
     * @param ListThingsInThingGroupRequest $args
     * @return ListThingsInThingGroupResponse
     */
    public function listThingsInThingGroup(ListThingsInThingGroupRequest $args)
    {
        $result = parent::listThingsInThingGroup($args->toArray());
        return new ListThingsInThingGroupResponse($result->toArray());
    }
}

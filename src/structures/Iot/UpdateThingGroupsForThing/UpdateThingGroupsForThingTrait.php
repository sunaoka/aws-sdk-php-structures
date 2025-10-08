<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateThingGroupsForThing;

trait UpdateThingGroupsForThingTrait
{
    /**
     * @param UpdateThingGroupsForThingRequest $args
     * @return UpdateThingGroupsForThingResponse
     */
    public function updateThingGroupsForThing(UpdateThingGroupsForThingRequest $args)
    {
        $result = parent::updateThingGroupsForThing($args->toArray());
        return new UpdateThingGroupsForThingResponse($result->toArray());
    }
}

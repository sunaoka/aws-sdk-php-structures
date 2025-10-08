<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingGroupsForThing;

trait ListThingGroupsForThingTrait
{
    /**
     * @param ListThingGroupsForThingRequest $args
     * @return ListThingGroupsForThingResponse
     */
    public function listThingGroupsForThing(ListThingGroupsForThingRequest $args)
    {
        $result = parent::listThingGroupsForThing($args->toArray());
        return new ListThingGroupsForThingResponse($result->toArray());
    }
}

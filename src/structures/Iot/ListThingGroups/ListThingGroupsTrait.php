<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingGroups;

trait ListThingGroupsTrait
{
    /**
     * @param ListThingGroupsRequest $args
     * @return ListThingGroupsResponse
     */
    public function listThingGroups(ListThingGroupsRequest $args)
    {
        $result = parent::listThingGroups($args->toArray());
        return new ListThingGroupsResponse($result->toArray());
    }
}

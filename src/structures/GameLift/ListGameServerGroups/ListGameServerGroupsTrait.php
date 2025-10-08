<?php

namespace Sunaoka\Aws\Structures\GameLift\ListGameServerGroups;

trait ListGameServerGroupsTrait
{
    /**
     * @param ListGameServerGroupsRequest $args
     * @return ListGameServerGroupsResponse
     */
    public function listGameServerGroups(ListGameServerGroupsRequest $args)
    {
        $result = parent::listGameServerGroups($args->toArray());
        return new ListGameServerGroupsResponse($result->toArray());
    }
}

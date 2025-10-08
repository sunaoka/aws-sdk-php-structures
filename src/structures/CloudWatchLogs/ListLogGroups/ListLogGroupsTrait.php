<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListLogGroups;

trait ListLogGroupsTrait
{
    /**
     * @param ListLogGroupsRequest $args
     * @return ListLogGroupsResponse
     */
    public function listLogGroups(ListLogGroupsRequest $args)
    {
        $result = parent::listLogGroups($args->toArray());
        return new ListLogGroupsResponse($result->toArray());
    }
}

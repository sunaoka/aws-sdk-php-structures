<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListTagsLogGroup;

trait ListTagsLogGroupTrait
{
    /**
     * @param ListTagsLogGroupRequest $args
     * @return ListTagsLogGroupResponse
     */
    public function listTagsLogGroup(ListTagsLogGroupRequest $args)
    {
        $result = parent::listTagsLogGroup($args->toArray());
        return new ListTagsLogGroupResponse($result->toArray());
    }
}

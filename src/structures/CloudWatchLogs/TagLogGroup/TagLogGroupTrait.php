<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TagLogGroup;

trait TagLogGroupTrait
{
    /**
     * @param TagLogGroupRequest $args
     * @return void
     */
    public function tagLogGroup(TagLogGroupRequest $args)
    {
        parent::tagLogGroup($args->toArray());
    }
}

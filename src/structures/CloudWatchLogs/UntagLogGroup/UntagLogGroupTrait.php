<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\UntagLogGroup;

trait UntagLogGroupTrait
{
    /**
     * @param UntagLogGroupRequest $args
     * @return void
     */
    public function untagLogGroup(UntagLogGroupRequest $args)
    {
        parent::untagLogGroup($args->toArray());
    }
}

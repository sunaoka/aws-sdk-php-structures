<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteLogGroup;

trait DeleteLogGroupTrait
{
    /**
     * @param DeleteLogGroupRequest $args
     * @return void
     */
    public function deleteLogGroup(DeleteLogGroupRequest $args)
    {
        parent::deleteLogGroup($args->toArray());
    }
}

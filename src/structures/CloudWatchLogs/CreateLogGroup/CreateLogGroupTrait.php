<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateLogGroup;

trait CreateLogGroupTrait
{
    /**
     * @param CreateLogGroupRequest $args
     * @return void
     */
    public function createLogGroup(CreateLogGroupRequest $args)
    {
        parent::createLogGroup($args->toArray());
    }
}

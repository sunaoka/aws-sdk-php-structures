<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRoutingProfileQueues;

trait UpdateRoutingProfileQueuesTrait
{
    /**
     * @param UpdateRoutingProfileQueuesRequest $args
     * @return void
     */
    public function updateRoutingProfileQueues(UpdateRoutingProfileQueuesRequest $args)
    {
        parent::updateRoutingProfileQueues($args->toArray());
    }
}

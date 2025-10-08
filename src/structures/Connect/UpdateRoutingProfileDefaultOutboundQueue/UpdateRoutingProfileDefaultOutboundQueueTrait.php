<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRoutingProfileDefaultOutboundQueue;

trait UpdateRoutingProfileDefaultOutboundQueueTrait
{
    /**
     * @param UpdateRoutingProfileDefaultOutboundQueueRequest $args
     * @return void
     */
    public function updateRoutingProfileDefaultOutboundQueue(UpdateRoutingProfileDefaultOutboundQueueRequest $args)
    {
        parent::updateRoutingProfileDefaultOutboundQueue($args->toArray());
    }
}

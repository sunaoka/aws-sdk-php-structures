<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateRoutingProfileQueues;

trait AssociateRoutingProfileQueuesTrait
{
    /**
     * @param AssociateRoutingProfileQueuesRequest $args
     * @return void
     */
    public function associateRoutingProfileQueues(AssociateRoutingProfileQueuesRequest $args)
    {
        parent::associateRoutingProfileQueues($args->toArray());
    }
}

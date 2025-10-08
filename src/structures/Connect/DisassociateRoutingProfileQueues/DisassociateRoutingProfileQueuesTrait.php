<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateRoutingProfileQueues;

trait DisassociateRoutingProfileQueuesTrait
{
    /**
     * @param DisassociateRoutingProfileQueuesRequest $args
     * @return void
     */
    public function disassociateRoutingProfileQueues(DisassociateRoutingProfileQueuesRequest $args)
    {
        parent::disassociateRoutingProfileQueues($args->toArray());
    }
}

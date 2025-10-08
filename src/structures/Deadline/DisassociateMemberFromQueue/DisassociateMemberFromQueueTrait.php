<?php

namespace Sunaoka\Aws\Structures\Deadline\DisassociateMemberFromQueue;

trait DisassociateMemberFromQueueTrait
{
    /**
     * @param DisassociateMemberFromQueueRequest $args
     * @return DisassociateMemberFromQueueResponse
     */
    public function disassociateMemberFromQueue(DisassociateMemberFromQueueRequest $args)
    {
        $result = parent::disassociateMemberFromQueue($args->toArray());
        return new DisassociateMemberFromQueueResponse($result->toArray());
    }
}

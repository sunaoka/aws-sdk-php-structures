<?php

namespace Sunaoka\Aws\Structures\Deadline\AssociateMemberToQueue;

trait AssociateMemberToQueueTrait
{
    /**
     * @param AssociateMemberToQueueRequest $args
     * @return AssociateMemberToQueueResponse
     */
    public function associateMemberToQueue(AssociateMemberToQueueRequest $args)
    {
        $result = parent::associateMemberToQueue($args->toArray());
        return new AssociateMemberToQueueResponse($result->toArray());
    }
}

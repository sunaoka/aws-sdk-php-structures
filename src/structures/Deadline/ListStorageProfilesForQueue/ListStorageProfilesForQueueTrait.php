<?php

namespace Sunaoka\Aws\Structures\Deadline\ListStorageProfilesForQueue;

trait ListStorageProfilesForQueueTrait
{
    /**
     * @param ListStorageProfilesForQueueRequest $args
     * @return ListStorageProfilesForQueueResponse
     */
    public function listStorageProfilesForQueue(ListStorageProfilesForQueueRequest $args)
    {
        $result = parent::listStorageProfilesForQueue($args->toArray());
        return new ListStorageProfilesForQueueResponse($result->toArray());
    }
}

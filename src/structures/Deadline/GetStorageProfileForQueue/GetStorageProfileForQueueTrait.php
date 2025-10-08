<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStorageProfileForQueue;

trait GetStorageProfileForQueueTrait
{
    /**
     * @param GetStorageProfileForQueueRequest $args
     * @return GetStorageProfileForQueueResponse
     */
    public function getStorageProfileForQueue(GetStorageProfileForQueueRequest $args)
    {
        $result = parent::getStorageProfileForQueue($args->toArray());
        return new GetStorageProfileForQueueResponse($result->toArray());
    }
}

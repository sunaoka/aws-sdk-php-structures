<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetQueue;

trait GetQueueTrait
{
    /**
     * @param GetQueueRequest $args
     * @return GetQueueResponse
     */
    public function getQueue(GetQueueRequest $args)
    {
        $result = parent::getQueue($args->toArray());
        return new GetQueueResponse($result->toArray());
    }
}

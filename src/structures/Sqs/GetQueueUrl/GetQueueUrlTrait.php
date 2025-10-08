<?php

namespace Sunaoka\Aws\Structures\Sqs\GetQueueUrl;

trait GetQueueUrlTrait
{
    /**
     * @param GetQueueUrlRequest $args
     * @return GetQueueUrlResponse
     */
    public function getQueueUrl(GetQueueUrlRequest $args)
    {
        $result = parent::getQueueUrl($args->toArray());
        return new GetQueueUrlResponse($result->toArray());
    }
}

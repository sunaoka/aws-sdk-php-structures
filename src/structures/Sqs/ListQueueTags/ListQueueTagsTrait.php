<?php

namespace Sunaoka\Aws\Structures\Sqs\ListQueueTags;

trait ListQueueTagsTrait
{
    /**
     * @param ListQueueTagsRequest $args
     * @return ListQueueTagsResponse
     */
    public function listQueueTags(ListQueueTagsRequest $args)
    {
        $result = parent::listQueueTags($args->toArray());
        return new ListQueueTagsResponse($result->toArray());
    }
}

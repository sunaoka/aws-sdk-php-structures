<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListTagsForStream;

trait ListTagsForStreamTrait
{
    /**
     * @param ListTagsForStreamRequest $args
     * @return ListTagsForStreamResponse
     */
    public function listTagsForStream(ListTagsForStreamRequest $args)
    {
        $result = parent::listTagsForStream($args->toArray());
        return new ListTagsForStreamResponse($result->toArray());
    }
}

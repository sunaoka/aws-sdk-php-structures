<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\TagStream;

trait TagStreamTrait
{
    /**
     * @param TagStreamRequest $args
     * @return TagStreamResponse
     */
    public function tagStream(TagStreamRequest $args)
    {
        $result = parent::tagStream($args->toArray());
        return new TagStreamResponse($result->toArray());
    }
}

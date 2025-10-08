<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UntagStream;

trait UntagStreamTrait
{
    /**
     * @param UntagStreamRequest $args
     * @return UntagStreamResponse
     */
    public function untagStream(UntagStreamRequest $args)
    {
        $result = parent::untagStream($args->toArray());
        return new UntagStreamResponse($result->toArray());
    }
}

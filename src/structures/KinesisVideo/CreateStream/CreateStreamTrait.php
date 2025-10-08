<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\CreateStream;

trait CreateStreamTrait
{
    /**
     * @param CreateStreamRequest $args
     * @return CreateStreamResponse
     */
    public function createStream(CreateStreamRequest $args)
    {
        $result = parent::createStream($args->toArray());
        return new CreateStreamResponse($result->toArray());
    }
}

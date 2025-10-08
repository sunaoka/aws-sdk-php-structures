<?php

namespace Sunaoka\Aws\Structures\Iot\CreateStream;

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

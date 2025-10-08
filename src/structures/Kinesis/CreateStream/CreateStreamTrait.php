<?php

namespace Sunaoka\Aws\Structures\Kinesis\CreateStream;

trait CreateStreamTrait
{
    /**
     * @param CreateStreamRequest $args
     * @return void
     */
    public function createStream(CreateStreamRequest $args)
    {
        parent::createStream($args->toArray());
    }
}

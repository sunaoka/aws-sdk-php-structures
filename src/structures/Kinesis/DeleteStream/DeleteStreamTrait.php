<?php

namespace Sunaoka\Aws\Structures\Kinesis\DeleteStream;

trait DeleteStreamTrait
{
    /**
     * @param DeleteStreamRequest $args
     * @return void
     */
    public function deleteStream(DeleteStreamRequest $args)
    {
        parent::deleteStream($args->toArray());
    }
}

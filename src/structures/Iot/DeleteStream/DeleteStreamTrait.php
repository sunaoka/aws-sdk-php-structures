<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteStream;

trait DeleteStreamTrait
{
    /**
     * @param DeleteStreamRequest $args
     * @return DeleteStreamResponse
     */
    public function deleteStream(DeleteStreamRequest $args)
    {
        $result = parent::deleteStream($args->toArray());
        return new DeleteStreamResponse($result->toArray());
    }
}

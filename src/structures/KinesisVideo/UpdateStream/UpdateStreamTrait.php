<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateStream;

trait UpdateStreamTrait
{
    /**
     * @param UpdateStreamRequest $args
     * @return UpdateStreamResponse
     */
    public function updateStream(UpdateStreamRequest $args)
    {
        $result = parent::updateStream($args->toArray());
        return new UpdateStreamResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateIngestionStream;

trait CreateIngestionStreamTrait
{
    /**
     * @param CreateIngestionStreamRequest $args
     * @return CreateIngestionStreamResponse
     */
    public function createIngestionStream(CreateIngestionStreamRequest $args)
    {
        $result = parent::createIngestionStream($args->toArray());
        return new CreateIngestionStreamResponse($result->toArray());
    }
}

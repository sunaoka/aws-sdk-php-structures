<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetIngestionStream;

trait GetIngestionStreamTrait
{
    /**
     * @param GetIngestionStreamRequest $args
     * @return GetIngestionStreamResponse
     */
    public function getIngestionStream(GetIngestionStreamRequest $args)
    {
        $result = parent::getIngestionStream($args->toArray());
        return new GetIngestionStreamResponse($result->toArray());
    }
}

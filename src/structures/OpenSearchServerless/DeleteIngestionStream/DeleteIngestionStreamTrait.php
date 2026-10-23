<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteIngestionStream;

trait DeleteIngestionStreamTrait
{
    /**
     * @param DeleteIngestionStreamRequest $args
     * @return DeleteIngestionStreamResponse
     */
    public function deleteIngestionStream(DeleteIngestionStreamRequest $args)
    {
        $result = parent::deleteIngestionStream($args->toArray());
        return new DeleteIngestionStreamResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Rekognition\DeleteStreamProcessor;

trait DeleteStreamProcessorTrait
{
    /**
     * @param DeleteStreamProcessorRequest $args
     * @return DeleteStreamProcessorResponse
     */
    public function deleteStreamProcessor(DeleteStreamProcessorRequest $args)
    {
        $result = parent::deleteStreamProcessor($args->toArray());
        return new DeleteStreamProcessorResponse($result->toArray());
    }
}

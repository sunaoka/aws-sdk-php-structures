<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateStreamProcessor;

trait CreateStreamProcessorTrait
{
    /**
     * @param CreateStreamProcessorRequest $args
     * @return CreateStreamProcessorResponse
     */
    public function createStreamProcessor(CreateStreamProcessorRequest $args)
    {
        $result = parent::createStreamProcessor($args->toArray());
        return new CreateStreamProcessorResponse($result->toArray());
    }
}

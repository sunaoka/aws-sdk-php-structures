<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartStreamProcessor;

trait StartStreamProcessorTrait
{
    /**
     * @param StartStreamProcessorRequest $args
     * @return StartStreamProcessorResponse
     */
    public function startStreamProcessor(StartStreamProcessorRequest $args)
    {
        $result = parent::startStreamProcessor($args->toArray());
        return new StartStreamProcessorResponse($result->toArray());
    }
}

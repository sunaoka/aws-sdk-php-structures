<?php

namespace Sunaoka\Aws\Structures\Rekognition\StopStreamProcessor;

trait StopStreamProcessorTrait
{
    /**
     * @param StopStreamProcessorRequest $args
     * @return StopStreamProcessorResponse
     */
    public function stopStreamProcessor(StopStreamProcessorRequest $args)
    {
        $result = parent::stopStreamProcessor($args->toArray());
        return new StopStreamProcessorResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Rekognition\UpdateStreamProcessor;

trait UpdateStreamProcessorTrait
{
    /**
     * @param UpdateStreamProcessorRequest $args
     * @return UpdateStreamProcessorResponse
     */
    public function updateStreamProcessor(UpdateStreamProcessorRequest $args)
    {
        $result = parent::updateStreamProcessor($args->toArray());
        return new UpdateStreamProcessorResponse($result->toArray());
    }
}

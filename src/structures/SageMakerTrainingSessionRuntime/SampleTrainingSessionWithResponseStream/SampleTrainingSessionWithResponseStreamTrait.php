<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\SampleTrainingSessionWithResponseStream;

trait SampleTrainingSessionWithResponseStreamTrait
{
    /**
     * @param SampleTrainingSessionWithResponseStreamRequest $args
     * @return SampleTrainingSessionWithResponseStreamResponse
     */
    public function sampleTrainingSessionWithResponseStream(SampleTrainingSessionWithResponseStreamRequest $args)
    {
        $result = parent::sampleTrainingSessionWithResponseStream($args->toArray());
        return new SampleTrainingSessionWithResponseStreamResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\SampleTrainingSession;

trait SampleTrainingSessionTrait
{
    /**
     * @param SampleTrainingSessionRequest $args
     * @return SampleTrainingSessionResponse
     */
    public function sampleTrainingSession(SampleTrainingSessionRequest $args)
    {
        $result = parent::sampleTrainingSession($args->toArray());
        return new SampleTrainingSessionResponse($result->toArray());
    }
}

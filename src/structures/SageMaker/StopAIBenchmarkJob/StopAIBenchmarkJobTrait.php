<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopAIBenchmarkJob;

trait StopAIBenchmarkJobTrait
{
    /**
     * @param StopAIBenchmarkJobRequest $args
     * @return StopAIBenchmarkJobResponse
     */
    public function stopAIBenchmarkJob(StopAIBenchmarkJobRequest $args)
    {
        $result = parent::stopAIBenchmarkJob($args->toArray());
        return new StopAIBenchmarkJobResponse($result->toArray());
    }
}

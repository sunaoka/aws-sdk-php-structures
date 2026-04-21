<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAIBenchmarkJob;

trait CreateAIBenchmarkJobTrait
{
    /**
     * @param CreateAIBenchmarkJobRequest $args
     * @return CreateAIBenchmarkJobResponse
     */
    public function createAIBenchmarkJob(CreateAIBenchmarkJobRequest $args)
    {
        $result = parent::createAIBenchmarkJob($args->toArray());
        return new CreateAIBenchmarkJobResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteAIBenchmarkJob;

trait DeleteAIBenchmarkJobTrait
{
    /**
     * @param DeleteAIBenchmarkJobRequest $args
     * @return DeleteAIBenchmarkJobResponse
     */
    public function deleteAIBenchmarkJob(DeleteAIBenchmarkJobRequest $args)
    {
        $result = parent::deleteAIBenchmarkJob($args->toArray());
        return new DeleteAIBenchmarkJobResponse($result->toArray());
    }
}

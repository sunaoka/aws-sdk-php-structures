<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateBatchInferenceJob;

trait CreateBatchInferenceJobTrait
{
    /**
     * @param CreateBatchInferenceJobRequest $args
     * @return CreateBatchInferenceJobResponse
     */
    public function createBatchInferenceJob(CreateBatchInferenceJobRequest $args)
    {
        $result = parent::createBatchInferenceJob($args->toArray());
        return new CreateBatchInferenceJobResponse($result->toArray());
    }
}

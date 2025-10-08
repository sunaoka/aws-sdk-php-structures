<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeBatchInferenceJob;

trait DescribeBatchInferenceJobTrait
{
    /**
     * @param DescribeBatchInferenceJobRequest $args
     * @return DescribeBatchInferenceJobResponse
     */
    public function describeBatchInferenceJob(DescribeBatchInferenceJobRequest $args)
    {
        $result = parent::describeBatchInferenceJob($args->toArray());
        return new DescribeBatchInferenceJobResponse($result->toArray());
    }
}

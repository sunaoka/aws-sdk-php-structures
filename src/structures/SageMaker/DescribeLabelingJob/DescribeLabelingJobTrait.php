<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeLabelingJob;

trait DescribeLabelingJobTrait
{
    /**
     * @param DescribeLabelingJobRequest $args
     * @return DescribeLabelingJobResponse
     */
    public function describeLabelingJob(DescribeLabelingJobRequest $args)
    {
        $result = parent::describeLabelingJob($args->toArray());
        return new DescribeLabelingJobResponse($result->toArray());
    }
}

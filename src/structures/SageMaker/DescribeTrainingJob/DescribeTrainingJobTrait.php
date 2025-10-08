<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingJob;

trait DescribeTrainingJobTrait
{
    /**
     * @param DescribeTrainingJobRequest $args
     * @return DescribeTrainingJobResponse
     */
    public function describeTrainingJob(DescribeTrainingJobRequest $args)
    {
        $result = parent::describeTrainingJob($args->toArray());
        return new DescribeTrainingJobResponse($result->toArray());
    }
}

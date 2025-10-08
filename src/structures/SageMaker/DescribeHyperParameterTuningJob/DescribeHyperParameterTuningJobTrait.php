<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob;

trait DescribeHyperParameterTuningJobTrait
{
    /**
     * @param DescribeHyperParameterTuningJobRequest $args
     * @return DescribeHyperParameterTuningJobResponse
     */
    public function describeHyperParameterTuningJob(DescribeHyperParameterTuningJobRequest $args)
    {
        $result = parent::describeHyperParameterTuningJob($args->toArray());
        return new DescribeHyperParameterTuningJobResponse($result->toArray());
    }
}

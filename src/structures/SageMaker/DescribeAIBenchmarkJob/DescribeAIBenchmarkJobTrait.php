<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIBenchmarkJob;

trait DescribeAIBenchmarkJobTrait
{
    /**
     * @param DescribeAIBenchmarkJobRequest $args
     * @return DescribeAIBenchmarkJobResponse
     */
    public function describeAIBenchmarkJob(DescribeAIBenchmarkJobRequest $args)
    {
        $result = parent::describeAIBenchmarkJob($args->toArray());
        return new DescribeAIBenchmarkJobResponse($result->toArray());
    }
}

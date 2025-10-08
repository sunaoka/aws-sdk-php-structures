<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCompilationJob;

trait DescribeCompilationJobTrait
{
    /**
     * @param DescribeCompilationJobRequest $args
     * @return DescribeCompilationJobResponse
     */
    public function describeCompilationJob(DescribeCompilationJobRequest $args)
    {
        $result = parent::describeCompilationJob($args->toArray());
        return new DescribeCompilationJobResponse($result->toArray());
    }
}

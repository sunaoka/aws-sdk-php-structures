<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeWorldGenerationJob;

trait DescribeWorldGenerationJobTrait
{
    /**
     * @param DescribeWorldGenerationJobRequest $args
     * @return DescribeWorldGenerationJobResponse
     */
    public function describeWorldGenerationJob(DescribeWorldGenerationJobRequest $args)
    {
        $result = parent::describeWorldGenerationJob($args->toArray());
        return new DescribeWorldGenerationJobResponse($result->toArray());
    }
}

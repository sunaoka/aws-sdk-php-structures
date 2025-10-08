<?php

namespace Sunaoka\Aws\Structures\signer\DescribeSigningJob;

trait DescribeSigningJobTrait
{
    /**
     * @param DescribeSigningJobRequest $args
     * @return DescribeSigningJobResponse
     */
    public function describeSigningJob(DescribeSigningJobRequest $args)
    {
        $result = parent::describeSigningJob($args->toArray());
        return new DescribeSigningJobResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeClassificationJob;

trait DescribeClassificationJobTrait
{
    /**
     * @param DescribeClassificationJobRequest $args
     * @return DescribeClassificationJobResponse
     */
    public function describeClassificationJob(DescribeClassificationJobRequest $args)
    {
        $result = parent::describeClassificationJob($args->toArray());
        return new DescribeClassificationJobResponse($result->toArray());
    }
}

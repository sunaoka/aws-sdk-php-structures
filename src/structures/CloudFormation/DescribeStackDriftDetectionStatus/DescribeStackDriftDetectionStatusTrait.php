<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackDriftDetectionStatus;

trait DescribeStackDriftDetectionStatusTrait
{
    /**
     * @param DescribeStackDriftDetectionStatusRequest $args
     * @return DescribeStackDriftDetectionStatusResponse
     */
    public function describeStackDriftDetectionStatus(DescribeStackDriftDetectionStatusRequest $args)
    {
        $result = parent::describeStackDriftDetectionStatus($args->toArray());
        return new DescribeStackDriftDetectionStatusResponse($result->toArray());
    }
}

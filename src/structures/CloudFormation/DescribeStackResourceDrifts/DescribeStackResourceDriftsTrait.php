<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackResourceDrifts;

trait DescribeStackResourceDriftsTrait
{
    /**
     * @param DescribeStackResourceDriftsRequest $args
     * @return DescribeStackResourceDriftsResponse
     */
    public function describeStackResourceDrifts(DescribeStackResourceDriftsRequest $args)
    {
        $result = parent::describeStackResourceDrifts($args->toArray());
        return new DescribeStackResourceDriftsResponse($result->toArray());
    }
}

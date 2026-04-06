<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarmContributors;

trait DescribeAlarmContributorsTrait
{
    /**
     * @param DescribeAlarmContributorsRequest $args
     * @return DescribeAlarmContributorsResponse
     */
    public function describeAlarmContributors(DescribeAlarmContributorsRequest $args)
    {
        $result = parent::describeAlarmContributors($args->toArray());
        return new DescribeAlarmContributorsResponse($result->toArray());
    }
}

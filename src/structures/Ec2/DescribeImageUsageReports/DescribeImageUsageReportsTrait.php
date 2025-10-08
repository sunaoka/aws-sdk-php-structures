<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImageUsageReports;

trait DescribeImageUsageReportsTrait
{
    /**
     * @param DescribeImageUsageReportsRequest $args
     * @return DescribeImageUsageReportsResponse
     */
    public function describeImageUsageReports(DescribeImageUsageReportsRequest $args)
    {
        $result = parent::describeImageUsageReports($args->toArray());
        return new DescribeImageUsageReportsResponse($result->toArray());
    }
}

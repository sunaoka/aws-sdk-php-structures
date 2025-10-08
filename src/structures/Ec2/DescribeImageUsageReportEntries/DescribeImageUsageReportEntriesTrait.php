<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImageUsageReportEntries;

trait DescribeImageUsageReportEntriesTrait
{
    /**
     * @param DescribeImageUsageReportEntriesRequest $args
     * @return DescribeImageUsageReportEntriesResponse
     */
    public function describeImageUsageReportEntries(DescribeImageUsageReportEntriesRequest $args)
    {
        $result = parent::describeImageUsageReportEntries($args->toArray());
        return new DescribeImageUsageReportEntriesResponse($result->toArray());
    }
}

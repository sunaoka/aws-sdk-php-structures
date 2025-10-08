<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeReportJob;

trait DescribeReportJobTrait
{
    /**
     * @param DescribeReportJobRequest $args
     * @return DescribeReportJobResponse
     */
    public function describeReportJob(DescribeReportJobRequest $args)
    {
        $result = parent::describeReportJob($args->toArray());
        return new DescribeReportJobResponse($result->toArray());
    }
}

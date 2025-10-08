<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestSetDiscrepancyReport;

trait DescribeTestSetDiscrepancyReportTrait
{
    /**
     * @param DescribeTestSetDiscrepancyReportRequest $args
     * @return DescribeTestSetDiscrepancyReportResponse
     */
    public function describeTestSetDiscrepancyReport(DescribeTestSetDiscrepancyReportRequest $args)
    {
        $result = parent::describeTestSetDiscrepancyReport($args->toArray());
        return new DescribeTestSetDiscrepancyReportResponse($result->toArray());
    }
}

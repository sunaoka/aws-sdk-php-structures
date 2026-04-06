<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeMetricsExport;

trait DescribeMetricsExportTrait
{
    /**
     * @param DescribeMetricsExportRequest $args
     * @return DescribeMetricsExportResponse
     */
    public function describeMetricsExport(DescribeMetricsExportRequest $args)
    {
        $result = parent::describeMetricsExport($args->toArray());
        return new DescribeMetricsExportResponse($result->toArray());
    }
}

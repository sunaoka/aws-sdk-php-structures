<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeExplainabilityExport;

trait DescribeExplainabilityExportTrait
{
    /**
     * @param DescribeExplainabilityExportRequest $args
     * @return DescribeExplainabilityExportResponse
     */
    public function describeExplainabilityExport(DescribeExplainabilityExportRequest $args)
    {
        $result = parent::describeExplainabilityExport($args->toArray());
        return new DescribeExplainabilityExportResponse($result->toArray());
    }
}

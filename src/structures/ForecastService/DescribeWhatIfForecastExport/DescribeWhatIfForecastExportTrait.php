<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeWhatIfForecastExport;

trait DescribeWhatIfForecastExportTrait
{
    /**
     * @param DescribeWhatIfForecastExportRequest $args
     * @return DescribeWhatIfForecastExportResponse
     */
    public function describeWhatIfForecastExport(DescribeWhatIfForecastExportRequest $args)
    {
        $result = parent::describeWhatIfForecastExport($args->toArray());
        return new DescribeWhatIfForecastExportResponse($result->toArray());
    }
}

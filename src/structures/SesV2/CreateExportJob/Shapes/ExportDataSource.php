<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetricsDataSource $MetricsDataSource
 * @property MessageInsightsDataSource $MessageInsightsDataSource
 */
class ExportDataSource extends Shape
{
    /**
     * @param array{
     *     MetricsDataSource?: MetricsDataSource,
     *     MessageInsightsDataSource?: MessageInsightsDataSource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

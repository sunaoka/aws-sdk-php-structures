<?php

namespace Sunaoka\Aws\Structures\SesV2\GetExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetricsDataSource|null $MetricsDataSource
 * @property MessageInsightsDataSource|null $MessageInsightsDataSource
 */
class ExportDataSource extends Shape
{
    /**
     * @param array{
     *     MetricsDataSource?: MetricsDataSource|null,
     *     MessageInsightsDataSource?: MessageInsightsDataSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'EMAIL_IDENTITY'|'CONFIGURATION_SET'|'ISP', list<string>> $Dimensions
 * @property 'VDM' $Namespace
 * @property list<ExportMetric> $Metrics
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $EndDate
 */
class MetricsDataSource extends Shape
{
    /**
     * @param array{
     *     Dimensions: array<'EMAIL_IDENTITY'|'CONFIGURATION_SET'|'ISP', list<string>>,
     *     Namespace: 'VDM',
     *     Metrics: list<ExportMetric>,
     *     StartDate: \Aws\Api\DateTimeResult,
     *     EndDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

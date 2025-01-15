<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\CreateMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3SourceConfig|null $S3SourceConfig
 * @property AppFlowConfig|null $AppFlowConfig
 * @property CloudWatchConfig|null $CloudWatchConfig
 * @property RDSSourceConfig|null $RDSSourceConfig
 * @property RedshiftSourceConfig|null $RedshiftSourceConfig
 * @property AthenaSourceConfig|null $AthenaSourceConfig
 */
class MetricSource extends Shape
{
    /**
     * @param array{
     *     S3SourceConfig?: S3SourceConfig|null,
     *     AppFlowConfig?: AppFlowConfig|null,
     *     CloudWatchConfig?: CloudWatchConfig|null,
     *     RDSSourceConfig?: RDSSourceConfig|null,
     *     RedshiftSourceConfig?: RedshiftSourceConfig|null,
     *     AthenaSourceConfig?: AthenaSourceConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

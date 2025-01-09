<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\UpdateMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3SourceConfig $S3SourceConfig
 * @property AppFlowConfig $AppFlowConfig
 * @property CloudWatchConfig $CloudWatchConfig
 * @property RDSSourceConfig $RDSSourceConfig
 * @property RedshiftSourceConfig $RedshiftSourceConfig
 * @property AthenaSourceConfig $AthenaSourceConfig
 */
class MetricSource extends Shape
{
    /**
     * @param array{
     *     S3SourceConfig?: S3SourceConfig,
     *     AppFlowConfig?: AppFlowConfig,
     *     CloudWatchConfig?: CloudWatchConfig,
     *     RDSSourceConfig?: RDSSourceConfig,
     *     RedshiftSourceConfig?: RedshiftSourceConfig,
     *     AthenaSourceConfig?: AthenaSourceConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

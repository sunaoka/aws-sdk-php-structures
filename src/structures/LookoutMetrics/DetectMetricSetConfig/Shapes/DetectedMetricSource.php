<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectedS3SourceConfig $S3SourceConfig
 */
class DetectedMetricSource extends Shape
{
    /**
     * @param array{S3SourceConfig?: DetectedS3SourceConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

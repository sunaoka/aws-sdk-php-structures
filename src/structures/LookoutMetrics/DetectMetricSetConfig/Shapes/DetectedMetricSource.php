<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectedS3SourceConfig|null $S3SourceConfig
 */
class DetectedMetricSource extends Shape
{
    /**
     * @param array{S3SourceConfig?: DetectedS3SourceConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

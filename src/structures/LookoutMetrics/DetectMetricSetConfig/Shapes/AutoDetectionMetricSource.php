<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoDetectionS3SourceConfig $S3SourceConfig
 */
class AutoDetectionMetricSource extends Shape
{
    /**
     * @param array{S3SourceConfig?: AutoDetectionS3SourceConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

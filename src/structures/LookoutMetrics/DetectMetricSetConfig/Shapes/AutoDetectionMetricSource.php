<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoDetectionS3SourceConfig|null $S3SourceConfig
 */
class AutoDetectionMetricSource extends Shape
{
    /**
     * @param array{S3SourceConfig?: AutoDetectionS3SourceConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

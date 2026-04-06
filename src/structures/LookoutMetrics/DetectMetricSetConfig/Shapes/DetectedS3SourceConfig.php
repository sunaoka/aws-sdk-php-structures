<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectedFileFormatDescriptor|null $FileFormatDescriptor
 */
class DetectedS3SourceConfig extends Shape
{
    /**
     * @param array{FileFormatDescriptor?: DetectedFileFormatDescriptor|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectedFileFormatDescriptor $FileFormatDescriptor
 */
class DetectedS3SourceConfig extends Shape
{
    /**
     * @param array{FileFormatDescriptor?: DetectedFileFormatDescriptor} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

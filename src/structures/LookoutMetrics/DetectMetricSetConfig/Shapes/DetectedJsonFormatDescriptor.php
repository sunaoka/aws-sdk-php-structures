<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectedField|null $FileCompression
 * @property DetectedField|null $Charset
 */
class DetectedJsonFormatDescriptor extends Shape
{
    /**
     * @param array{
     *     FileCompression?: DetectedField|null,
     *     Charset?: DetectedField|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

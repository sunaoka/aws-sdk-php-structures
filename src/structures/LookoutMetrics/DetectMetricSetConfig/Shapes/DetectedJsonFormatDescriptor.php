<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectedField $FileCompression
 * @property DetectedField $Charset
 */
class DetectedJsonFormatDescriptor extends Shape
{
    /**
     * @param array{
     *     FileCompression?: DetectedField,
     *     Charset?: DetectedField
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

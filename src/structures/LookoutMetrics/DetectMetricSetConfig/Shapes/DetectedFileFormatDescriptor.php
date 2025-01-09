<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectedCsvFormatDescriptor $CsvFormatDescriptor
 * @property DetectedJsonFormatDescriptor $JsonFormatDescriptor
 */
class DetectedFileFormatDescriptor extends Shape
{
    /**
     * @param array{
     *     CsvFormatDescriptor?: DetectedCsvFormatDescriptor,
     *     JsonFormatDescriptor?: DetectedJsonFormatDescriptor
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

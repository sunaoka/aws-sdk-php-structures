<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectedCsvFormatDescriptor|null $CsvFormatDescriptor
 * @property DetectedJsonFormatDescriptor|null $JsonFormatDescriptor
 */
class DetectedFileFormatDescriptor extends Shape
{
    /**
     * @param array{
     *     CsvFormatDescriptor?: DetectedCsvFormatDescriptor|null,
     *     JsonFormatDescriptor?: DetectedJsonFormatDescriptor|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

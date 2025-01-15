<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CsvFormatDescriptor|null $CsvFormatDescriptor
 * @property JsonFormatDescriptor|null $JsonFormatDescriptor
 */
class FileFormatDescriptor extends Shape
{
    /**
     * @param array{
     *     CsvFormatDescriptor?: CsvFormatDescriptor|null,
     *     JsonFormatDescriptor?: JsonFormatDescriptor|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

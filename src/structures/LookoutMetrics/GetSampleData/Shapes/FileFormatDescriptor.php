<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetSampleData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CsvFormatDescriptor $CsvFormatDescriptor
 * @property JsonFormatDescriptor $JsonFormatDescriptor
 */
class FileFormatDescriptor extends Shape
{
    /**
     * @param array{
     *     CsvFormatDescriptor?: CsvFormatDescriptor,
     *     JsonFormatDescriptor?: JsonFormatDescriptor
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

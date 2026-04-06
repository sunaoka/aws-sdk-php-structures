<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectedField|null $FileCompression
 * @property DetectedField|null $Charset
 * @property DetectedField|null $ContainsHeader
 * @property DetectedField|null $Delimiter
 * @property DetectedField|null $HeaderList
 * @property DetectedField|null $QuoteSymbol
 */
class DetectedCsvFormatDescriptor extends Shape
{
    /**
     * @param array{
     *     FileCompression?: DetectedField|null,
     *     Charset?: DetectedField|null,
     *     ContainsHeader?: DetectedField|null,
     *     Delimiter?: DetectedField|null,
     *     HeaderList?: DetectedField|null,
     *     QuoteSymbol?: DetectedField|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

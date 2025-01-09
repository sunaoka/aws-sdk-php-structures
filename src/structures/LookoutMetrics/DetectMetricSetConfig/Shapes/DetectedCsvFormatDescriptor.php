<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectedField $FileCompression
 * @property DetectedField $Charset
 * @property DetectedField $ContainsHeader
 * @property DetectedField $Delimiter
 * @property DetectedField $HeaderList
 * @property DetectedField $QuoteSymbol
 */
class DetectedCsvFormatDescriptor extends Shape
{
    /**
     * @param array{
     *     FileCompression?: DetectedField,
     *     Charset?: DetectedField,
     *     ContainsHeader?: DetectedField,
     *     Delimiter?: DetectedField,
     *     HeaderList?: DetectedField,
     *     QuoteSymbol?: DetectedField
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

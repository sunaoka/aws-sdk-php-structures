<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'GZIP'|null $FileCompression
 * @property string|null $Charset
 * @property bool|null $ContainsHeader
 * @property string|null $Delimiter
 * @property list<string>|null $HeaderList
 * @property string|null $QuoteSymbol
 */
class CsvFormatDescriptor extends Shape
{
    /**
     * @param array{
     *     FileCompression?: 'NONE'|'GZIP'|null,
     *     Charset?: string|null,
     *     ContainsHeader?: bool|null,
     *     Delimiter?: string|null,
     *     HeaderList?: list<string>|null,
     *     QuoteSymbol?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\CreateMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'GZIP' $FileCompression
 * @property string $Charset
 * @property bool $ContainsHeader
 * @property string $Delimiter
 * @property list<string> $HeaderList
 * @property string $QuoteSymbol
 */
class CsvFormatDescriptor extends Shape
{
    /**
     * @param array{
     *     FileCompression?: 'NONE'|'GZIP',
     *     Charset?: string,
     *     ContainsHeader?: bool,
     *     Delimiter?: string,
     *     HeaderList?: list<string>,
     *     QuoteSymbol?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

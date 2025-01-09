<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ColumnSeparator
 * @property string $EscapeChar
 * @property string $QuoteChar
 * @property string $NullValue
 * @property bool $TrimWhiteSpace
 */
class CsvConfiguration extends Shape
{
    /**
     * @param array{
     *     ColumnSeparator?: string,
     *     EscapeChar?: string,
     *     QuoteChar?: string,
     *     NullValue?: string,
     *     TrimWhiteSpace?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

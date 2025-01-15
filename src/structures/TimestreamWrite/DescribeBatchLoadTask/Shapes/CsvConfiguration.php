<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ColumnSeparator
 * @property string|null $EscapeChar
 * @property string|null $QuoteChar
 * @property string|null $NullValue
 * @property bool|null $TrimWhiteSpace
 */
class CsvConfiguration extends Shape
{
    /**
     * @param array{
     *     ColumnSeparator?: string|null,
     *     EscapeChar?: string|null,
     *     QuoteChar?: string|null,
     *     NullValue?: string|null,
     *     TrimWhiteSpace?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

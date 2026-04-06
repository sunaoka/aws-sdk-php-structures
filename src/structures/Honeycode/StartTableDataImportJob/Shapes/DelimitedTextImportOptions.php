<?php

namespace Sunaoka\Aws\Structures\Honeycode\StartTableDataImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $delimiter
 * @property bool|null $hasHeaderRow
 * @property bool|null $ignoreEmptyRows
 * @property 'UTF-8'|'US-ASCII'|'ISO-8859-1'|'UTF-16BE'|'UTF-16LE'|'UTF-16'|null $dataCharacterEncoding
 */
class DelimitedTextImportOptions extends Shape
{
    /**
     * @param array{
     *     delimiter: string,
     *     hasHeaderRow?: bool|null,
     *     ignoreEmptyRows?: bool|null,
     *     dataCharacterEncoding?: 'UTF-8'|'US-ASCII'|'ISO-8859-1'|'UTF-16BE'|'UTF-16LE'|'UTF-16'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

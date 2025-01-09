<?php

namespace Sunaoka\Aws\Structures\Glacier\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALWAYS'|'ASNEEDED' $QuoteFields
 * @property string $QuoteEscapeCharacter
 * @property string $RecordDelimiter
 * @property string $FieldDelimiter
 * @property string $QuoteCharacter
 */
class CSVOutput extends Shape
{
    /**
     * @param array{
     *     QuoteFields?: 'ALWAYS'|'ASNEEDED',
     *     QuoteEscapeCharacter?: string,
     *     RecordDelimiter?: string,
     *     FieldDelimiter?: string,
     *     QuoteCharacter?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

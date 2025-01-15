<?php

namespace Sunaoka\Aws\Structures\Glacier\InitiateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALWAYS'|'ASNEEDED'|null $QuoteFields
 * @property string|null $QuoteEscapeCharacter
 * @property string|null $RecordDelimiter
 * @property string|null $FieldDelimiter
 * @property string|null $QuoteCharacter
 */
class CSVOutput extends Shape
{
    /**
     * @param array{
     *     QuoteFields?: 'ALWAYS'|'ASNEEDED'|null,
     *     QuoteEscapeCharacter?: string|null,
     *     RecordDelimiter?: string|null,
     *     FieldDelimiter?: string|null,
     *     QuoteCharacter?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

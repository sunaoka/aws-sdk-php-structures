<?php

namespace Sunaoka\Aws\Structures\Glacier\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USE'|'IGNORE'|'NONE' $FileHeaderInfo
 * @property string $Comments
 * @property string $QuoteEscapeCharacter
 * @property string $RecordDelimiter
 * @property string $FieldDelimiter
 * @property string $QuoteCharacter
 */
class CSVInput extends Shape
{
    /**
     * @param array{
     *     FileHeaderInfo?: 'USE'|'IGNORE'|'NONE',
     *     Comments?: string,
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

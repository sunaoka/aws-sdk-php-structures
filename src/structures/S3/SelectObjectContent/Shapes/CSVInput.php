<?php

namespace Sunaoka\Aws\Structures\S3\SelectObjectContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USE'|'IGNORE'|'NONE'|null $FileHeaderInfo
 * @property string|null $Comments
 * @property string|null $QuoteEscapeCharacter
 * @property string|null $RecordDelimiter
 * @property string|null $FieldDelimiter
 * @property string|null $QuoteCharacter
 * @property bool|null $AllowQuotedRecordDelimiter
 */
class CSVInput extends Shape
{
    /**
     * @param array{
     *     FileHeaderInfo?: 'USE'|'IGNORE'|'NONE'|null,
     *     Comments?: string|null,
     *     QuoteEscapeCharacter?: string|null,
     *     RecordDelimiter?: string|null,
     *     FieldDelimiter?: string|null,
     *     QuoteCharacter?: string|null,
     *     AllowQuotedRecordDelimiter?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

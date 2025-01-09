<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Priority
 * @property 'NONE'|'COMPRESS_WHITE_SPACE'|'HTML_ENTITY_DECODE'|'LOWERCASE'|'CMD_LINE'|'URL_DECODE'|'BASE64_DECODE'|'HEX_DECODE'|'MD5'|'REPLACE_COMMENTS'|'ESCAPE_SEQ_DECODE'|'SQL_HEX_DECODE'|'CSS_DECODE'|'JS_DECODE'|'NORMALIZE_PATH'|'NORMALIZE_PATH_WIN'|'REMOVE_NULLS'|'REPLACE_NULLS'|'BASE64_DECODE_EXT'|'URL_DECODE_UNI'|'UTF8_TO_UNICODE' $Type
 */
class TextTransformation extends Shape
{
    /**
     * @param array{
     *     Priority: int,
     *     Type: 'NONE'|'COMPRESS_WHITE_SPACE'|'HTML_ENTITY_DECODE'|'LOWERCASE'|'CMD_LINE'|'URL_DECODE'|'BASE64_DECODE'|'HEX_DECODE'|'MD5'|'REPLACE_COMMENTS'|'ESCAPE_SEQ_DECODE'|'SQL_HEX_DECODE'|'CSS_DECODE'|'JS_DECODE'|'NORMALIZE_PATH'|'NORMALIZE_PATH_WIN'|'REMOVE_NULLS'|'REPLACE_NULLS'|'BASE64_DECODE_EXT'|'URL_DECODE_UNI'|'UTF8_TO_UNICODE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

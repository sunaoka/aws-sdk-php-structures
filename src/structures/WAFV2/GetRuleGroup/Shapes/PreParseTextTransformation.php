<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $Priority
 * @property 'NONE'|'URL_DECODE'|'URL_DECODE_UNI'|'COMBINE_DUPLICATE_QUERY_ARGS_BY_COMMA'|'REPLACE_SEMICOLONS_WITH_AMPERSANDS' $Type
 */
class PreParseTextTransformation extends Shape
{
    /**
     * @param array{
     *     Priority: int<0, max>,
     *     Type: 'NONE'|'URL_DECODE'|'URL_DECODE_UNI'|'COMBINE_DUPLICATE_QUERY_ARGS_BY_COMMA'|'REPLACE_SEMICOLONS_WITH_AMPERSANDS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

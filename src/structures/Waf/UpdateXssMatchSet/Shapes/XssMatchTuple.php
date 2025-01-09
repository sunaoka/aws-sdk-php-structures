<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateXssMatchSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldToMatch $FieldToMatch
 * @property 'NONE'|'COMPRESS_WHITE_SPACE'|'HTML_ENTITY_DECODE'|'LOWERCASE'|'CMD_LINE'|'URL_DECODE' $TextTransformation
 */
class XssMatchTuple extends Shape
{
    /**
     * @param array{
     *     FieldToMatch: FieldToMatch,
     *     TextTransformation: 'NONE'|'COMPRESS_WHITE_SPACE'|'HTML_ENTITY_DECODE'|'LOWERCASE'|'CMD_LINE'|'URL_DECODE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

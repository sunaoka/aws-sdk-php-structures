<?php

namespace Sunaoka\Aws\Structures\WafRegional\CreateByteMatchSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldToMatch $FieldToMatch
 * @property string $TargetString
 * @property 'NONE'|'COMPRESS_WHITE_SPACE'|'HTML_ENTITY_DECODE'|'LOWERCASE'|'CMD_LINE'|'URL_DECODE' $TextTransformation
 * @property 'EXACTLY'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS'|'CONTAINS_WORD' $PositionalConstraint
 */
class ByteMatchTuple extends Shape
{
    /**
     * @param array{
     *     FieldToMatch: FieldToMatch,
     *     TargetString: string,
     *     TextTransformation: 'NONE'|'COMPRESS_WHITE_SPACE'|'HTML_ENTITY_DECODE'|'LOWERCASE'|'CMD_LINE'|'URL_DECODE',
     *     PositionalConstraint: 'EXACTLY'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS'|'CONTAINS_WORD'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

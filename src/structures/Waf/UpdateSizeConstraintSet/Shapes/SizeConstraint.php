<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateSizeConstraintSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldToMatch $FieldToMatch
 * @property 'NONE'|'COMPRESS_WHITE_SPACE'|'HTML_ENTITY_DECODE'|'LOWERCASE'|'CMD_LINE'|'URL_DECODE' $TextTransformation
 * @property 'EQ'|'NE'|'LE'|'LT'|'GE'|'GT' $ComparisonOperator
 * @property int<0, 21474836480> $Size
 */
class SizeConstraint extends Shape
{
    /**
     * @param array{
     *     FieldToMatch: FieldToMatch,
     *     TextTransformation: 'NONE'|'COMPRESS_WHITE_SPACE'|'HTML_ENTITY_DECODE'|'LOWERCASE'|'CMD_LINE'|'URL_DECODE',
     *     ComparisonOperator: 'EQ'|'NE'|'LE'|'LT'|'GE'|'GT',
     *     Size: int<0, 21474836480>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

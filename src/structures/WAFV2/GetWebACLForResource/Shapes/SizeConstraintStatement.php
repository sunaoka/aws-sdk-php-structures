<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldToMatch $FieldToMatch
 * @property 'EQ'|'NE'|'LE'|'LT'|'GE'|'GT' $ComparisonOperator
 * @property int<0, 21474836480> $Size
 * @property list<TextTransformation> $TextTransformations
 */
class SizeConstraintStatement extends Shape
{
    /**
     * @param array{
     *     FieldToMatch: FieldToMatch,
     *     ComparisonOperator: 'EQ'|'NE'|'LE'|'LT'|'GE'|'GT',
     *     Size: int<0, 21474836480>,
     *     TextTransformations: list<TextTransformation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

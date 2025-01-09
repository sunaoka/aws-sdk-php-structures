<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldToMatch $FieldToMatch
 * @property 'EQ'|'NE'|'LE'|'LT'|'GE'|'GT' $ComparisonOperator
 * @property int $Size
 * @property list<TextTransformation> $TextTransformations
 */
class SizeConstraintStatement extends Shape
{
    /**
     * @param array{
     *     FieldToMatch: FieldToMatch,
     *     ComparisonOperator: 'EQ'|'NE'|'LE'|'LT'|'GE'|'GT',
     *     Size: int,
     *     TextTransformations: list<TextTransformation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

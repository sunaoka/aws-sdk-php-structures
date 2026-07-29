<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldToMatch $FieldToMatch
 * @property 'EQ'|'NE'|'LE'|'LT'|'GE'|'GT' $ComparisonOperator
 * @property int<0, 21474836480> $Size
 * @property list<TextTransformation> $TextTransformations
 * @property list<PreParseTextTransformation>|null $PreParseTextTransformations
 */
class SizeConstraintStatement extends Shape
{
    /**
     * @param array{
     *     FieldToMatch: FieldToMatch,
     *     ComparisonOperator: 'EQ'|'NE'|'LE'|'LT'|'GE'|'GT',
     *     Size: int<0, 21474836480>,
     *     TextTransformations: list<TextTransformation>,
     *     PreParseTextTransformations?: list<PreParseTextTransformation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

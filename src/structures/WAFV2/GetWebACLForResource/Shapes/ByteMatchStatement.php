<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SearchString
 * @property FieldToMatch $FieldToMatch
 * @property list<TextTransformation> $TextTransformations
 * @property 'EXACTLY'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS'|'CONTAINS_WORD' $PositionalConstraint
 */
class ByteMatchStatement extends Shape
{
    /**
     * @param array{
     *     SearchString: string,
     *     FieldToMatch: FieldToMatch,
     *     TextTransformations: list<TextTransformation>,
     *     PositionalConstraint: 'EXACTLY'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS'|'CONTAINS_WORD'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

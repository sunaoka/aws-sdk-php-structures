<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $SearchString
 * @property FieldToMatch $FieldToMatch
 * @property list<TextTransformation> $TextTransformations
 * @property 'EXACTLY'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS'|'CONTAINS_WORD' $PositionalConstraint
 */
class ByteMatchStatement extends Shape
{
    /**
     * @param array{
     *     SearchString: string|resource|\Psr\Http\Message\StreamInterface,
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

<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ARN
 * @property FieldToMatch $FieldToMatch
 * @property list<TextTransformation> $TextTransformations
 * @property list<PreParseTextTransformation>|null $PreParseTextTransformations
 */
class RegexPatternSetReferenceStatement extends Shape
{
    /**
     * @param array{
     *     ARN: string,
     *     FieldToMatch: FieldToMatch,
     *     TextTransformations: list<TextTransformation>,
     *     PreParseTextTransformations?: list<PreParseTextTransformation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

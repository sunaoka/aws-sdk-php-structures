<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegexString
 * @property FieldToMatch $FieldToMatch
 * @property list<TextTransformation> $TextTransformations
 * @property list<PreParseTextTransformation>|null $PreParseTextTransformations
 */
class RegexMatchStatement extends Shape
{
    /**
     * @param array{
     *     RegexString: string,
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

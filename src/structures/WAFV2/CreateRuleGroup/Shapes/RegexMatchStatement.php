<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegexString
 * @property FieldToMatch $FieldToMatch
 * @property list<TextTransformation> $TextTransformations
 */
class RegexMatchStatement extends Shape
{
    /**
     * @param array{
     *     RegexString: string,
     *     FieldToMatch: FieldToMatch,
     *     TextTransformations: list<TextTransformation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

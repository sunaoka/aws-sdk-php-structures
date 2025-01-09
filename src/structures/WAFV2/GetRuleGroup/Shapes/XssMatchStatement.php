<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldToMatch $FieldToMatch
 * @property list<TextTransformation> $TextTransformations
 */
class XssMatchStatement extends Shape
{
    /**
     * @param array{
     *     FieldToMatch: FieldToMatch,
     *     TextTransformations: list<TextTransformation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

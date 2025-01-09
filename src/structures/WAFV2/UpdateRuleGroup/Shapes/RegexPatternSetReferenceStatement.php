<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ARN
 * @property FieldToMatch $FieldToMatch
 * @property list<TextTransformation> $TextTransformations
 */
class RegexPatternSetReferenceStatement extends Shape
{
    /**
     * @param array{
     *     ARN: string,
     *     FieldToMatch: FieldToMatch,
     *     TextTransformations: list<TextTransformation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

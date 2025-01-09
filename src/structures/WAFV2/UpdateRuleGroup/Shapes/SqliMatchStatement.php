<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldToMatch $FieldToMatch
 * @property list<TextTransformation> $TextTransformations
 * @property 'LOW'|'HIGH' $SensitivityLevel
 */
class SqliMatchStatement extends Shape
{
    /**
     * @param array{
     *     FieldToMatch: FieldToMatch,
     *     TextTransformations: list<TextTransformation>,
     *     SensitivityLevel?: 'LOW'|'HIGH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

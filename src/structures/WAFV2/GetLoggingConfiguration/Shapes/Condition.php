<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionCondition $ActionCondition
 * @property LabelNameCondition $LabelNameCondition
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     ActionCondition?: ActionCondition,
     *     LabelNameCondition?: LabelNameCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

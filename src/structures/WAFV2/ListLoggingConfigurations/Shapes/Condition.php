<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListLoggingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionCondition|null $ActionCondition
 * @property LabelNameCondition|null $LabelNameCondition
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     ActionCondition?: ActionCondition|null,
     *     LabelNameCondition?: LabelNameCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

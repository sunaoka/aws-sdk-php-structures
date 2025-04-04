<?php

namespace Sunaoka\Aws\Structures\Iot\ListViolationEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $statistic
 */
class StatisticalThreshold extends Shape
{
    /**
     * @param array{statistic?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

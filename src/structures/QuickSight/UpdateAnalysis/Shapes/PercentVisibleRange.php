<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $From
 * @property double $To
 */
class PercentVisibleRange extends Shape
{
    /**
     * @param array{
     *     From?: double,
     *     To?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

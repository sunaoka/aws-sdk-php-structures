<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $From
 * @property double|null $To
 */
class PercentVisibleRange extends Shape
{
    /**
     * @param array{
     *     From?: double|null,
     *     To?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VisualMessageConfiguration|null $NoDataMessage
 */
class VisualMessages extends Shape
{
    /**
     * @param array{NoDataMessage?: VisualMessageConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

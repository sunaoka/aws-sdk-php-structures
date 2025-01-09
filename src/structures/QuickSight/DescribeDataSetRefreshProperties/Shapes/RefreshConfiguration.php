<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSetRefreshProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IncrementalRefresh $IncrementalRefresh
 */
class RefreshConfiguration extends Shape
{
    /**
     * @param array{IncrementalRefresh: IncrementalRefresh} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

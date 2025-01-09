<?php

namespace Sunaoka\Aws\Structures\QuickSight\PutDataSetRefreshProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LookbackWindow $LookbackWindow
 */
class IncrementalRefresh extends Shape
{
    /**
     * @param array{LookbackWindow: LookbackWindow} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

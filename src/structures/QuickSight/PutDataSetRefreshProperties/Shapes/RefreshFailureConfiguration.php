<?php

namespace Sunaoka\Aws\Structures\QuickSight\PutDataSetRefreshProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RefreshFailureEmailAlert|null $EmailAlert
 */
class RefreshFailureConfiguration extends Shape
{
    /**
     * @param array{EmailAlert?: RefreshFailureEmailAlert|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

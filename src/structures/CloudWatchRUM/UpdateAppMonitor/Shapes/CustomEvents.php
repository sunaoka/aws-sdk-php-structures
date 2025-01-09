<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\UpdateAppMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 */
class CustomEvents extends Shape
{
    /**
     * @param array{Status?: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

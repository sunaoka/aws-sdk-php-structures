<?php

namespace Sunaoka\Aws\Structures\Keyspaces\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED' $status
 */
class TimeToLive extends Shape
{
    /**
     * @param array{status: 'ENABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

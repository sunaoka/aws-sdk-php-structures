<?php

namespace Sunaoka\Aws\Structures\Keyspaces\RestoreTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $status
 */
class PointInTimeRecovery extends Shape
{
    /**
     * @param array{status: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

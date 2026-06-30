<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateClusterVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $timeoutMinutes
 */
class RollbackConfig extends Shape
{
    /**
     * @param array{timeoutMinutes?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

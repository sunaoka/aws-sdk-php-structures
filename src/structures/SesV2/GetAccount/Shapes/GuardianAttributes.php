<?php

namespace Sunaoka\Aws\Structures\SesV2\GetAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $OptimizedSharedDelivery
 */
class GuardianAttributes extends Shape
{
    /**
     * @param array{OptimizedSharedDelivery?: 'ENABLED'|'DISABLED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SesV2\PutAccountVdmAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $OptimizedSharedDelivery
 */
class GuardianAttributes extends Shape
{
    /**
     * @param array{OptimizedSharedDelivery?: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

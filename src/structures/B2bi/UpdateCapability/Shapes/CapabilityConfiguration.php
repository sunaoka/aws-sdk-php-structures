<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EdiConfiguration $edi
 */
class CapabilityConfiguration extends Shape
{
    /**
     * @param array{edi?: EdiConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

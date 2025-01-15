<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EdiConfiguration|null $edi
 */
class CapabilityConfiguration extends Shape
{
    /**
     * @param array{edi?: EdiConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdatePartnership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property X12Envelope|null $x12
 */
class OutboundEdiOptions extends Shape
{
    /**
     * @param array{x12?: X12Envelope|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

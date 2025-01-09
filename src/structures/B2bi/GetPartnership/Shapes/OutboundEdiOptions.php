<?php

namespace Sunaoka\Aws\Structures\B2bi\GetPartnership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property X12Envelope $x12
 */
class OutboundEdiOptions extends Shape
{
    /**
     * @param array{x12?: X12Envelope} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

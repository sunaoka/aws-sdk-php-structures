<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdatePartnership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property X12OutboundEdiHeaders|null $common
 */
class X12Envelope extends Shape
{
    /**
     * @param array{common?: X12OutboundEdiHeaders|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

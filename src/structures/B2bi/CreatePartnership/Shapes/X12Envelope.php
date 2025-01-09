<?php

namespace Sunaoka\Aws\Structures\B2bi\CreatePartnership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property X12OutboundEdiHeaders $common
 */
class X12Envelope extends Shape
{
    /**
     * @param array{common?: X12OutboundEdiHeaders} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

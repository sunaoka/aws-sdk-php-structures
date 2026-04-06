<?php

namespace Sunaoka\Aws\Structures\B2bi\GetPartnership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property X12AcknowledgmentOptions|null $acknowledgmentOptions
 */
class X12InboundEdiOptions extends Shape
{
    /**
     * @param array{acknowledgmentOptions?: X12AcknowledgmentOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

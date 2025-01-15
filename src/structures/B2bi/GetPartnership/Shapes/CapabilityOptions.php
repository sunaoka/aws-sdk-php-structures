<?php

namespace Sunaoka\Aws\Structures\B2bi\GetPartnership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutboundEdiOptions|null $outboundEdi
 */
class CapabilityOptions extends Shape
{
    /**
     * @param array{outboundEdi?: OutboundEdiOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

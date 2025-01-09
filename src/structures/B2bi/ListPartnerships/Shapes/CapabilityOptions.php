<?php

namespace Sunaoka\Aws\Structures\B2bi\ListPartnerships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutboundEdiOptions $outboundEdi
 */
class CapabilityOptions extends Shape
{
    /**
     * @param array{outboundEdi?: OutboundEdiOptions} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

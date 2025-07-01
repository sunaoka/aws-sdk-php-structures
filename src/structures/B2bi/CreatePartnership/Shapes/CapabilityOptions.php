<?php

namespace Sunaoka\Aws\Structures\B2bi\CreatePartnership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutboundEdiOptions|null $outboundEdi
 * @property InboundEdiOptions|null $inboundEdi
 */
class CapabilityOptions extends Shape
{
    /**
     * @param array{
     *     outboundEdi?: OutboundEdiOptions|null,
     *     inboundEdi?: InboundEdiOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

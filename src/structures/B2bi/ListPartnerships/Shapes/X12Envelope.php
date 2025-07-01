<?php

namespace Sunaoka\Aws\Structures\B2bi\ListPartnerships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property X12OutboundEdiHeaders|null $common
 * @property WrapOptions|null $wrapOptions
 */
class X12Envelope extends Shape
{
    /**
     * @param array{
     *     common?: X12OutboundEdiHeaders|null,
     *     wrapOptions?: WrapOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

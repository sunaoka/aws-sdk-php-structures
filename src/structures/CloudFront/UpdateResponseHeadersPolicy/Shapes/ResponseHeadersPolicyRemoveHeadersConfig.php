<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateResponseHeadersPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<ResponseHeadersPolicyRemoveHeader> $Items
 */
class ResponseHeadersPolicyRemoveHeadersConfig extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<ResponseHeadersPolicyRemoveHeader>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateResponseHeadersPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<ResponseHeadersPolicyCustomHeader>|null $Items
 */
class ResponseHeadersPolicyCustomHeadersConfig extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<ResponseHeadersPolicyCustomHeader>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

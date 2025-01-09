<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetResponseHeadersPolicyConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<ResponseHeadersPolicyCustomHeader> $Items
 */
class ResponseHeadersPolicyCustomHeadersConfig extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<ResponseHeadersPolicyCustomHeader>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

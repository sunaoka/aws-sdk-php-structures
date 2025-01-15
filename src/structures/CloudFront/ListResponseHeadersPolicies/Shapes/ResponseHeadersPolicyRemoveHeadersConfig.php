<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListResponseHeadersPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<ResponseHeadersPolicyRemoveHeader>|null $Items
 */
class ResponseHeadersPolicyRemoveHeadersConfig extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<ResponseHeadersPolicyRemoveHeader>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

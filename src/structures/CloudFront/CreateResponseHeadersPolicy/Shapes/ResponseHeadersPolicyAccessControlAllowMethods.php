<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateResponseHeadersPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<'GET'|'POST'|'OPTIONS'|'PUT'|'DELETE'|'PATCH'|'HEAD'|'ALL'> $Items
 */
class ResponseHeadersPolicyAccessControlAllowMethods extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items: list<'GET'|'POST'|'OPTIONS'|'PUT'|'DELETE'|'PATCH'|'HEAD'|'ALL'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

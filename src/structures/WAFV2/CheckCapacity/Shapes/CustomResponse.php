<?php

namespace Sunaoka\Aws\Structures\WAFV2\CheckCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ResponseCode
 * @property string $CustomResponseBodyKey
 * @property list<CustomHTTPHeader> $ResponseHeaders
 */
class CustomResponse extends Shape
{
    /**
     * @param array{
     *     ResponseCode: int,
     *     CustomResponseBodyKey?: string,
     *     ResponseHeaders?: list<CustomHTTPHeader>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

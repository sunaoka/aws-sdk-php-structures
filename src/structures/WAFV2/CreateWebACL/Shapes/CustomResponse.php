<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<200, 599> $ResponseCode
 * @property string $CustomResponseBodyKey
 * @property list<CustomHTTPHeader> $ResponseHeaders
 */
class CustomResponse extends Shape
{
    /**
     * @param array{
     *     ResponseCode: int<200, 599>,
     *     CustomResponseBodyKey?: string,
     *     ResponseHeaders?: list<CustomHTTPHeader>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<200, 599> $ResponseCode
 * @property string|null $CustomResponseBodyKey
 * @property list<CustomHTTPHeader>|null $ResponseHeaders
 */
class CustomResponse extends Shape
{
    /**
     * @param array{
     *     ResponseCode: int<200, 599>,
     *     CustomResponseBodyKey?: string|null,
     *     ResponseHeaders?: list<CustomHTTPHeader>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

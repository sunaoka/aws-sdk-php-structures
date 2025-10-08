<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetRoutingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Header
 * @property string $ValueGlob
 */
class RoutingRuleMatchHeaderValue extends Shape
{
    /**
     * @param array{
     *     Header: string,
     *     ValueGlob: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

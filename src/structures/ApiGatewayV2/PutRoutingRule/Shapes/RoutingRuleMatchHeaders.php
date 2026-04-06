<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\PutRoutingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RoutingRuleMatchHeaderValue> $AnyOf
 */
class RoutingRuleMatchHeaders extends Shape
{
    /**
     * @param array{AnyOf: list<RoutingRuleMatchHeaderValue>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

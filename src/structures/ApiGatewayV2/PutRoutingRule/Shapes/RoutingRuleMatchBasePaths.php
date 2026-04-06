<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\PutRoutingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AnyOf
 */
class RoutingRuleMatchBasePaths extends Shape
{
    /**
     * @param array{AnyOf: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

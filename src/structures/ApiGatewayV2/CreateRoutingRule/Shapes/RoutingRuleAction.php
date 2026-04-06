<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateRoutingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RoutingRuleActionInvokeApi $InvokeApi
 */
class RoutingRuleAction extends Shape
{
    /**
     * @param array{InvokeApi: RoutingRuleActionInvokeApi} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

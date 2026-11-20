<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Unit|null $gateway
 * @property LinkTarget|null $link
 * @property RoutingRuleTarget|null $routingRule
 */
class UpdateTarget extends Shape
{
    /**
     * @param array{
     *     gateway?: Unit|null,
     *     link?: LinkTarget|null,
     *     routingRule?: RoutingRuleTarget|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

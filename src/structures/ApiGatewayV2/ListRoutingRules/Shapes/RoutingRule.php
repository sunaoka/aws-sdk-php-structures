<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ListRoutingRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RoutingRuleAction>|null $Actions
 * @property list<RoutingRuleCondition>|null $Conditions
 * @property int<1, 1000000>|null $Priority
 * @property string|null $RoutingRuleArn
 * @property string|null $RoutingRuleId
 */
class RoutingRule extends Shape
{
    /**
     * @param array{
     *     Actions?: list<RoutingRuleAction>|null,
     *     Conditions?: list<RoutingRuleCondition>|null,
     *     Priority?: int<1, 1000000>|null,
     *     RoutingRuleArn?: string|null,
     *     RoutingRuleId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

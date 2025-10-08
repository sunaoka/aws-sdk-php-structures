<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\PutRoutingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RoutingRuleMatchBasePaths|null $MatchBasePaths
 * @property RoutingRuleMatchHeaders|null $MatchHeaders
 */
class RoutingRuleCondition extends Shape
{
    /**
     * @param array{
     *     MatchBasePaths?: RoutingRuleMatchBasePaths|null,
     *     MatchHeaders?: RoutingRuleMatchHeaders|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TargetTrafficSplitEntry> $trafficSplit
 */
class WeightedRoute extends Shape
{
    /**
     * @param array{trafficSplit: list<TargetTrafficSplitEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGatewayRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TrafficSplitEntry> $trafficSplit
 */
class WeightedOverride extends Shape
{
    /**
     * @param array{trafficSplit: list<TrafficSplitEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

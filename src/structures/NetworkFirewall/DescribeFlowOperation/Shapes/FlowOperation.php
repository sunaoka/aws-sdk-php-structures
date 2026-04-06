<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFlowOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MinimumFlowAgeInSeconds
 * @property list<FlowFilter>|null $FlowFilters
 */
class FlowOperation extends Shape
{
    /**
     * @param array{
     *     MinimumFlowAgeInSeconds?: int|null,
     *     FlowFilters?: list<FlowFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

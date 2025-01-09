<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessionQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'LATENCY'|'COST'|'DESTINATION'|'LOCATION'> $PriorityOrder
 * @property list<string> $LocationOrder
 */
class PriorityConfiguration extends Shape
{
    /**
     * @param array{
     *     PriorityOrder?: list<'LATENCY'|'COST'|'DESTINATION'|'LOCATION'>,
     *     LocationOrder?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

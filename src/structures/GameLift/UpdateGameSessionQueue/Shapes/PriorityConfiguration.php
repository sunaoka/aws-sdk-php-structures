<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateGameSessionQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'LATENCY'|'COST'|'DESTINATION'|'LOCATION'>|null $PriorityOrder
 * @property list<string>|null $LocationOrder
 */
class PriorityConfiguration extends Shape
{
    /**
     * @param array{
     *     PriorityOrder?: list<'LATENCY'|'COST'|'DESTINATION'|'LOCATION'>|null,
     *     LocationOrder?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

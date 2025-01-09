<?php

namespace Sunaoka\Aws\Structures\Ssm\GetInventory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Expression
 * @property list<InventoryAggregator> $Aggregators
 * @property list<InventoryGroup> $Groups
 */
class InventoryAggregator extends Shape
{
    /**
     * @param array{
     *     Expression?: string,
     *     Aggregators?: list<InventoryAggregator>,
     *     Groups?: list<InventoryGroup>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

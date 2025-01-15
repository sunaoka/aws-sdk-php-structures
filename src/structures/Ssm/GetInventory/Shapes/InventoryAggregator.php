<?php

namespace Sunaoka\Aws\Structures\Ssm\GetInventory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Expression
 * @property list<InventoryAggregator>|null $Aggregators
 * @property list<InventoryGroup>|null $Groups
 */
class InventoryAggregator extends Shape
{
    /**
     * @param array{
     *     Expression?: string|null,
     *     Aggregators?: list<InventoryAggregator>|null,
     *     Groups?: list<InventoryGroup>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

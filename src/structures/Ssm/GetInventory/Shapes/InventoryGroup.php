<?php

namespace Sunaoka\Aws\Structures\Ssm\GetInventory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<InventoryFilter> $Filters
 */
class InventoryGroup extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Filters: list<InventoryFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

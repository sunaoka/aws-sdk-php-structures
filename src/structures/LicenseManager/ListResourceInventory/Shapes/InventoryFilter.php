<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListResourceInventory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'EQUALS'|'NOT_EQUALS'|'BEGINS_WITH'|'CONTAINS' $Condition
 * @property string $Value
 */
class InventoryFilter extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Condition: 'EQUALS'|'NOT_EQUALS'|'BEGINS_WITH'|'CONTAINS',
     *     Value?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

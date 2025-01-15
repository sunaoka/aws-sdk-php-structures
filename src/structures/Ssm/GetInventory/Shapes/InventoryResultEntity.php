<?php

namespace Sunaoka\Aws\Structures\Ssm\GetInventory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property array<string, InventoryResultItem>|null $Data
 */
class InventoryResultEntity extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Data?: array<string, InventoryResultItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

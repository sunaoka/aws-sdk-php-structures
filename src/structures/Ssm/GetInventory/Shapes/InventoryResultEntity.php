<?php

namespace Sunaoka\Aws\Structures\Ssm\GetInventory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property array<string, InventoryResultItem> $Data
 */
class InventoryResultEntity extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Data?: array<string, InventoryResultItem>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

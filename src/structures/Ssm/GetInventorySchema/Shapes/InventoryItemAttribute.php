<?php

namespace Sunaoka\Aws\Structures\Ssm\GetInventorySchema\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'string'|'number' $DataType
 */
class InventoryItemAttribute extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     DataType: 'string'|'number'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

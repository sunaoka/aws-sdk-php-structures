<?php

namespace Sunaoka\Aws\Structures\Ssm\GetInventorySchema\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TypeName
 * @property string $Version
 * @property list<InventoryItemAttribute> $Attributes
 * @property string $DisplayName
 */
class InventoryItemSchema extends Shape
{
    /**
     * @param array{
     *     TypeName: string,
     *     Version?: string,
     *     Attributes: list<InventoryItemAttribute>,
     *     DisplayName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

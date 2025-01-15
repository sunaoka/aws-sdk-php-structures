<?php

namespace Sunaoka\Aws\Structures\Ssm\GetInventorySchema\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TypeName
 * @property string|null $Version
 * @property list<InventoryItemAttribute> $Attributes
 * @property string|null $DisplayName
 */
class InventoryItemSchema extends Shape
{
    /**
     * @param array{
     *     TypeName: string,
     *     Version?: string|null,
     *     Attributes: list<InventoryItemAttribute>,
     *     DisplayName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

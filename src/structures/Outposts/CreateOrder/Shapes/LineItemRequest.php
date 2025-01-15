<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateOrder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogItemId
 * @property int<1, max>|null $Quantity
 */
class LineItemRequest extends Shape
{
    /**
     * @param array{
     *     CatalogItemId?: string|null,
     *     Quantity?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

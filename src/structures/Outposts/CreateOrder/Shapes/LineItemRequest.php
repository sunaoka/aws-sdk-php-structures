<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateOrder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogItemId
 * @property int<1, max> $Quantity
 */
class LineItemRequest extends Shape
{
    /**
     * @param array{
     *     CatalogItemId?: string,
     *     Quantity?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

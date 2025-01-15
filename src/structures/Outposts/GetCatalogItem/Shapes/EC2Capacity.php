<?php

namespace Sunaoka\Aws\Structures\Outposts\GetCatalogItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Family
 * @property string|null $MaxSize
 * @property string|null $Quantity
 */
class EC2Capacity extends Shape
{
    /**
     * @param array{
     *     Family?: string|null,
     *     MaxSize?: string|null,
     *     Quantity?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

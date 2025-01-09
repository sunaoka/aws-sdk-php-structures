<?php

namespace Sunaoka\Aws\Structures\Outposts\GetCatalogItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Family
 * @property string $MaxSize
 * @property string $Quantity
 */
class EC2Capacity extends Shape
{
    /**
     * @param array{
     *     Family?: string,
     *     MaxSize?: string,
     *     Quantity?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

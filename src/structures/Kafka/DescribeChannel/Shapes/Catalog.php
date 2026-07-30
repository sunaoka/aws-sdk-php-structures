<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogArn
 * @property string|null $WarehouseLocation
 */
class Catalog extends Shape
{
    /**
     * @param array{
     *     CatalogArn?: string|null,
     *     WarehouseLocation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

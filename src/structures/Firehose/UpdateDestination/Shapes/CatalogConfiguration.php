<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogARN
 * @property string $WarehouseLocation
 */
class CatalogConfiguration extends Shape
{
    /**
     * @param array{
     *     CatalogARN?: string,
     *     WarehouseLocation?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogARN
 * @property string|null $WarehouseLocation
 */
class CatalogConfiguration extends Shape
{
    /**
     * @param array{
     *     CatalogARN?: string|null,
     *     WarehouseLocation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Glue\GetDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $Region
 */
class DatabaseIdentifier extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName?: string,
     *     Region?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

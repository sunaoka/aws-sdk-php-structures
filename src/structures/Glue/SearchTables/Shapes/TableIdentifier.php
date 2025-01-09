<?php

namespace Sunaoka\Aws\Structures\Glue\SearchTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $Name
 * @property string $Region
 */
class TableIdentifier extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName?: string,
     *     Name?: string,
     *     Region?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

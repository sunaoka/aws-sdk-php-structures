<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogId
 * @property string|null $DatabaseName
 * @property string|null $Name
 * @property string|null $Region
 */
class TableIdentifier extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName?: string|null,
     *     Name?: string|null,
     *     Region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

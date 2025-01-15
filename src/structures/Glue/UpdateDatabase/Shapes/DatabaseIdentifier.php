<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogId
 * @property string|null $DatabaseName
 * @property string|null $Region
 */
class DatabaseIdentifier extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName?: string|null,
     *     Region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
